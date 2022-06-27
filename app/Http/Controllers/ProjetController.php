<?php

namespace App\Http\Controllers;

use App\Models\Categorie;

use Illuminate\Http\Request;

use App\Models\Projet;

class ProjetController extends Controller
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
        $categories = Categorie::All();
        $projets = Projet::orderByDesc('created_at')->get();
        return view('admin.projets', compact('projets', 'categories'));
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
            'categorie_id' => 'required',
            'intitule' => 'required',
            'prefecture' => 'required',
            'moe' => 'required',
            'ville' => 'required',
            'composantes' => 'required',
            'mont_Invest' => 'required',
            'annee' => 'required',
            'superficie' => 'required',
            'etat_Av' => 'required',
            'desc' => 'required',
            'mission' => 'required',
            'images' => 'required',
        ]);

        $projet = new Projet();

        $projet->categorie_id = $request->categorie_id;
        $projet->intitule = $request->intitule;
        $projet->prefecture = $request->prefecture;
        $projet->moe = $request->moe;
        $projet->ville = $request->ville;
        $projet->composantes = $request->composantes;
        $projet->mont_Invest = $request->mont_Invest;
        $projet->annee = $request->annee;
        $projet->superficie = $request->superficie;
        $projet->etat_Av = $request->etat_Av;
        $projet->desc = $request->desc;
        $projet->mission = $request->mission;
        if ($request->hasFile('images')) {
            //Get Just Ext
            $extention = $request->file('images')->getClientOriginalExtension();
            //FileName To Store
            $fileNameToStore = "item_" . time() . '.' . $extention;
            //Upload images
            $path = $request->file('images')->storeAs('public/uploads', $fileNameToStore);
            $projet->images = $fileNameToStore;
        }
        $projet->save();
        $notification = array(
            'message' => 'Projet ajouter avec succès',
            'alert-type' => 'success'
        );
        return redirect()->route('projets')->with($notification);
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
        $projet = Projet::findOrFail($id);

        $request->validate([
            'categorie_id' => 'required',
            'intitule' => 'required',
            'prefecture' => 'required',
            'moe' => 'required',
            'ville' => 'required',
            'composantes' => 'required',
            'mont_Invest' => 'required',
            'annee' => 'required',
            'superficie' => 'required',
            'etat_Av' => 'required',
            'desc' => 'required',
            'mission' => 'required'
        ]);

        $projet->categorie_id = $request->categorie_id;
        $projet->intitule = $request->intitule;
        $projet->prefecture = $request->prefecture;
        $projet->moe = $request->moe;
        $projet->ville = $request->ville;
        $projet->composantes = $request->composantes;
        $projet->mont_Invest = $request->mont_Invest;
        $projet->annee = $request->annee;
        $projet->superficie = $request->superficie;
        $projet->etat_Av = $request->etat_Av;
        $projet->desc = $request->desc;
        $projet->mission = $request->mission;
        if ($request->hasFile('images')) {
            //Get Just Ext
            $extention = $request->file('images')->getClientOriginalExtension();
            //FileName To Store
            $fileNameToStore = "item_" . time() . '.' . $extention;
            //Upload images
            $path = $request->file('images')->storeAs('public/uploads', $fileNameToStore);
            $projet->images = $fileNameToStore;
        }
        $projet->save();

        $notification = array(
            'message' => 'Employé modifier avec succès',
            'alert-type' => 'success'
        );
        return redirect()->route('projets')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projet = Projet::findOrFail($id);
        $projet->delete();
        $notification = array(
            'message' => 'Projet modifier avec succès',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
