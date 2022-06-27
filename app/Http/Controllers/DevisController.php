<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Devis;

class DevisController extends Controller
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
        $devies = Devis::get();
        return view('admin.devis', compact('devies'));
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
            'ville' => 'required',
            'message' => 'required'
        ]);

        $devis = new Devis();

        $devis->nom = $request->nom;
        $devis->societe = $request->societe;
        $devis->email = $request->email;
        $devis->telephone = $request->telephone;
        $devis->ville = $request->ville;
        $devis->message = $request->message;
        $devis->save();

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
