<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fournisseur;

class FournisseurController extends Controller
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
        $fournisseurs = Fournisseur::get();
        return view('admin.fournisseurs', compact('fournisseurs'));
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
            'nom' => 'required',
            'adresse' => 'required',
            'ville' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'date_acquisition' => 'required',
            'valeur_acquisition' => 'required'
        ]);

        $fournisseur = new Fournisseur();

        $fournisseur->nom = $request->nom;
        $fournisseur->adresse = $request->adresse;
        $fournisseur->ville = $request->ville;
        $fournisseur->email = $request->email;
        $fournisseur->telephone = $request->telephone;
        $fournisseur->date_acquisition = $request->date_acquisition;
        $fournisseur->valeur_acquisition = $request->valeur_acquisition;
        $fournisseur->save();
        $notification = array(
            'message' => 'Fournisseur ajouter avec succès',
            'alert-type' => 'success'
        );
        return redirect()->route('fournisseurs')->with($notification);
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
        $fournisseur = Fournisseur::findOrFail($id);

        $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
            'ville' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'date_acquisition' => 'required',
            'valeur_acquisition' => 'required'
        ]);

        $fournisseur->nom = $request->nom;
        $fournisseur->adresse = $request->adresse;
        $fournisseur->ville = $request->ville;
        $fournisseur->email = $request->email;
        $fournisseur->telephone = $request->telephone;
        $fournisseur->date_acquisition = $request->date_acquisition;
        $fournisseur->valeur_acquisition = $request->valeur_acquisition;
        $fournisseur->save();

        $notification = array(
            'message' => 'Fournisseur modifier avec succès',
            'alert-type' => 'success'
        );
        return redirect()->route('fournisseurs')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fournisseur = Fournisseur::find($id);
        $fournisseur->delete();

        $notification = array(
            'message' => 'Fournisseur supprimer avec succès',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
        // return redirect()->back();
    }
}
