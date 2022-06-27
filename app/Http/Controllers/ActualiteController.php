<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Actualite;

class ActualiteController extends Controller
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
        $actualites = Actualite::orderByDesc('created_at')->get();
        return view('admin.actualites', compact('actualites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'titre' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        $actualite = new Actualite();
        if ($request->hasFile('image')) {
            //Get Just Ext
            $extention = $request->file('image')->getClientOriginalExtension();
            //FileName To Store
            $fileNameToStore = "item_" . time() . '.' . $extention;
            //Upload image
            $path = $request->file('image')->storeAs('public/uploads', $fileNameToStore);
            $actualite->image = $fileNameToStore;
        }

        $actualite->description = $request->description;
        $actualite->titre = $request->titre;

        $actualite->save();
        $notification = array(
            'message' => 'Actualité ajouter avec succès',
            'alert-type' => 'success'
        );
        return redirect()->route('actualites')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $actualite = Actualite::findOrFail($id);

        $request->validate([
            'titre' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('image')) {
            //Get Just Ext
            $extention = $request->file('image')->getClientOriginalExtension();
            //FileName To Store
            $fileNameToStore = "item_" . time() . '.' . $extention;
            //Upload image
            $path = $request->file('image')->storeAs('public/uploads', $fileNameToStore);
            $actualite->image = $fileNameToStore;
        }

        $actualite->description = $request->description;
        $actualite->titre = $request->titre;
        $actualite->save();
        $notification = array(
            'message' => 'Actualité modifier avec succès',
            'alert-type' => 'success'
        );
        return redirect()->route('actualites')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actualite = Actualite::findOrFail($id);
        $actualite->delete();

        $notification = array(
            'message' => 'Actualité supprimer avec succès',
            'alert-type' => 'success'
        );
        return redirect()->route('actualites')->with($notification);
    }
}
