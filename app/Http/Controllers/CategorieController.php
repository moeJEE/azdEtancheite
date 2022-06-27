<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categorie;

class CategorieController extends Controller
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
        $categories = Categorie::orderByDesc('created_at')->get();
        // return view('categories.index', compact('categories'));

        return view('admin.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.edit-add');
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

        $categorie = new Categorie();

        $categorie->categorie = $request->categorie;
        $categorie->save();

        // return redirect()->route('categories.index');
        $notification = array(
            'message' => 'Catégorie ajouter avec succès',
            'alert-type' => 'success'
        );
        return redirect()->route('categories')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie::findOrFail($id);
        return view('categories.edit-add', compact('categorie'));
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
        $categorie = Categorie::findOrFail($id);
        $categorie->categorie = $request->categorie;
        $categorie->save();

        // return redirect()->route('categories.index');
        $notification = array(
            'message' => 'Catégorie modifier avec succès',
            'alert-type' => 'success'
        );
        return redirect()->route('categories')->with($notification);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->delete();
        $notification = array(
            'message' => 'Catégorie supprimer avec succès',
            'alert-type' => 'success'
        );
        return redirect()->route('categories')->with($notification);
    }
}
