<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ClientFidele;

class ClientFideleController extends Controller
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
        $clientsFideles = ClientFidele::orderByDesc('created_at')->get();
        return view('admin.clientsFideles', compact('clientsFideles'));
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
            'societe' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'ville' => 'required'
        ]);

        $clientFidele = new ClientFidele();

        $clientFidele->nom = $request->nom;
        $clientFidele->societe = $request->societe;
        $clientFidele->email = $request->email;
        $clientFidele->telephone = $request->telephone;
        $clientFidele->ville = $request->ville;
        $clientFidele->save();

        $notification = array(
            'message' => 'Client ajouter avec succès',
            'alert-type' => 'success'
        );
        return redirect()->route('clientsFideles')->with($notification);
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
        $clientFidele = ClientFidele::findOrFail($id);

        $request->validate([
            'nom' => 'required',
            'societe' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'ville' => 'required'
        ]);

        $clientFidele->nom = $request->nom;
        $clientFidele->societe = $request->societe;
        $clientFidele->email = $request->email;
        $clientFidele->telephone = $request->telephone;
        $clientFidele->ville = $request->ville;
        $clientFidele->save();

        $notification = array(
            'message' => 'Client modifier avec succès',
            'alert-type' => 'success'
        );
        return redirect()->route('clientsFideles')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientFidele = ClientFidele::find($id);
        $clientFidele->delete();

        $notification = array(
            'message' => 'Client supprimer avec succès',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
        // return redirect()->back();
    }
}
