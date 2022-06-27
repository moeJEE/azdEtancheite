<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CategorieProduit;
use App\Models\Fournisseur;
use App\Models\Produit;

class ProduitController extends Controller
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
        $categoriesProduits = CategorieProduit::get();
        $fournisseurs = Fournisseur::get();
        $produits = Produit::with('categorieProduit', 'fournisseur')->orderByDesc('created_at')->get();
        return view('admin.stock', compact('produits', 'categoriesProduits', 'fournisseurs'));
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
            'image' => 'required',
            'categorie_produit_id' => 'required',
            'code' => 'required',
            'nom' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'prix_Achat' => 'required',
            'fournisseur_id' => 'required'
        ]);

        $produit = new Produit();
        if ($request->hasFile('image')) {
            //Get Just Ext
            $extention = $request->file('image')->getClientOriginalExtension();
            //FileName To Store
            $fileNameToStore = "item_" . time() . '.' . $extention;
            //Upload image
            $path = $request->file('image')->storeAs('public/uploads', $fileNameToStore);
            $produit->image = $fileNameToStore;
        }
        $produit->code = $request->code;
        $produit->nom = $request->nom;
        $produit->categorie_produit_id = $request->categorie_produit_id;
        $produit->description = $request->description;
        $produit->stock = $request->stock;
        $produit->prix_Achat = $request->prix_Achat;
        $produit->fournisseur_id = $request->fournisseur_id;
        $produit->save();
        $notification = array(
            'message' => 'Produit ajouter avec succès',
            'alert-type' => 'success'
        );
        return redirect()->route('stock')->with($notification);
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
        $produit = Produit::findOrFail($id);

        $request->validate([
            'categorie_produit_id' => 'required',
            'code' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'prix_Achat' => 'required'
        ]);

        $produit->code = $request->code;
        $produit->categorie_produit_id = $request->categorie_produit_id;
        $produit->description = $request->description;
        $produit->stock = $request->stock;
        $produit->prix_Achat = $request->prix_Achat;
        $produit->save();
        $notification = array(
            'message' => 'Produit modifier avec succès',
            'alert-type' => 'success'
        );
        return redirect()->route('stock')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = Produit::findOrFail($id);
        $produit->delete();
        $notification = array(
            'message' => 'Produit supprimer avec succès',
            'alert-type' => 'success'
        );
        return redirect()->route('stock')->with($notification);
    }
}
