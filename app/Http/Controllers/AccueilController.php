<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Devis;
use App\Models\Prestation;
use App\Models\Projet;
use Illuminate\Http\Request;

class AccueilController extends Controller
{

    public function index()
    {

        $prestations = Prestation::get();
        $categories = Categorie::get();
        $projets = Projet::get();
        return view('accueil', compact('prestations', 'categories', 'projets'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nom' => 'required',
            'societe' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'ville' => 'required',
            'message' => 'required',
        ]);

        $devis = new Devis();

        $devis->nom = $request->nom;
        $devis->societe = $request->societe;
        $devis->email = $request->email;
        $devis->telephone = $request->telephone;
        $devis->ville = $request->ville;
        $devis->message = $request->message;

        $devis->save();
        return redirect('/accueil');
    }

    public function projet()
    {
        $categories = Categorie::get();
        $projets = Projet::get();

        return view('projet', compact('categories', 'projets'));
    }

    public function details($id)
    {
        $projet = Projet::where('id', $id)->firstOrFail();
        return view('details', compact('projet'));
    }
}
