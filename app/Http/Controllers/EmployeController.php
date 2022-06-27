<?php

namespace App\Http\Controllers;

use App\Models\Employe;

use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $employes = Employe::get();
        return view('admin.employes', compact('employes'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'cin' => 'required',
            'telephone' => 'required',
            'sexe' => 'required',
            'date_Nais' => 'required',
            'poste' => 'required',
            'salaire' => 'required'
        ]);

        $employe = new Employe();

        $employe->nom = $request->nom;
        $employe->prenom = $request->prenom;
        $employe->email = $request->email;
        $employe->cin = $request->cin;
        $employe->telephone = $request->telephone;
        $employe->sexe = $request->sexe;
        $employe->date_Nais = $request->date_Nais;
        $employe->poste = $request->poste;
        $employe->salaire = $request->salaire;
        $employe->save();

        $notification = array(
            'message' => 'Employé ajouter avec succès',
            'alert-type' => 'success'
        );
        return redirect()->route('employes')->with($notification);
    }

    public function update(Request $request, $id)
    {
        $employe = Employe::findOrFail($id);

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'cin' => 'required',
            'telephone' => 'required',
            'sexe' => 'required',
            'date_Nais' => 'required',
            'poste' => 'required',
            'salaire' => 'required'
        ]);

        $employe->nom = $request->nom;
        $employe->prenom = $request->prenom;
        $employe->email = $request->email;
        $employe->cin = $request->cin;
        $employe->telephone = $request->telephone;
        $employe->sexe = $request->sexe;
        $employe->date_Nais = $request->date_Nais;
        $employe->poste = $request->poste;
        $employe->salaire = $request->salaire;
        $employe->save();

        $notification = array(
            'message' => 'Employé modifier avec succès',
            'alert-type' => 'success'
        );
        return redirect()->route('employes')->with($notification);
    }

    public function destroy($id)
    {
        $employe = Employe::find($id);
        $employe->delete();

        $notification = array(
            'message' => 'Employé supprimer avec succès',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
        // return redirect()->back();
    }
}
