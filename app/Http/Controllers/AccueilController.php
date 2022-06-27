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

    public function contact_index()
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
            'contact' => 'required',
        ]);

        $devis = new Devis();

        $devis->nom = $request->nom;
        $devis->societe = $request->societe;
        $devis->email = $request->email;
        $devis->telephone = $request->telephone;
        $devis->contact = $request->contact;

        $devis->save();
        return redirect('/accueil');
    }
}
