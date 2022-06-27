<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CategorieProduit;

class CategorieProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $categoriesProduits = CategorieProduit::orderByDesc('created_at')->get();
        return view('admin.categoriesProduits', compact('categoriesProduits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('categories.edit-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'categorie' => 'required',
        ]);

        $categorieProduit = new CategorieProduit();

        $categorieProduit->categorie = $request->categorie;
        $categorieProduit->save();

        // return redirect()->route('categories.index');
        $notification = array(
            'message' => 'Categorie ajouter avec succès',
            'alert-type' => 'success'
        );
        return redirect()->route('categoriesProduits')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $categorie = Categorie::findOrFail($id);
        // return view('categories.edit-add', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'categorie' => 'required',
        ]);
        $categorieProduit = CategorieProduit::findOrFail($id);
        $categorieProduit->categorie = $request->categorie;
        $categorieProduit->save();

        // return redirect()->route('categories.index');
        $notification = array(
            'message' => 'Categorie modifier avec succès',
            'alert-type' => 'success'
        );
        return redirect()->route('categoriesProduits')->with($notification);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorieProduit = CategorieProduit::findOrFail($id);
        $categorieProduit->delete();
        $notification = array(
            'message' => 'Categorie supprimer avec succès',
            'alert-type' => 'success'
        );
        return redirect()->route('categoriesProduits')->with($notification);
    }
}
