<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Prestation;

class PrestationController extends Controller
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
        $prestations = Prestation::orderByDesc('created_at')->get();
        return view('admin.prestations', compact('prestations'));
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
            'titre' => 'required',
            'detail' => 'required',
            'logo' => 'required'
        ]);

        $prestation = new Prestation();

        $prestation->titre = $request->titre;
        $prestation->detail = $request->detail;

        if ($request->hasFile('image')) {
            //Get Just Ext
            $extention = $request->file('image')->getClientOriginalExtension();
            //FileName To Store
            $fileNameToStore = "item_" . time() . '.' . $extention;
            //Upload images
            $path = $request->file('image')->storeAs('public/uploads', $fileNameToStore);
            $prestation->image = $fileNameToStore;
        }

        if ($request->hasFile('logo')) {
            //Get Just Ext
            $extention = $request->file('logo')->getClientOriginalExtension();
            //FileName To Store
            $fileNameToStore = "item_" . time() . '.' . $extention;
            //Upload logo
            $path = $request->file('logo')->storeAs('public/uploads', $fileNameToStore);
            $prestation->logo = $fileNameToStore;
        }

        $prestation->save();

        $notification = array(
            'message' => 'Prestation ajouter avec succès',
            'alert-type' => 'success'
        );
        return redirect()->route('prestations')->with($notification);
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
        $prestation = Prestation::findOrFail($id);

        $request->validate([
            'titre' => 'required',
            'detail' => 'required',
        ]);

        if ($request->hasFile('image')) {
            //Get Just Ext
            $extention = $request->file('image')->getClientOriginalExtension();
            //FileName To Store
            $fileNameToStore = "item_" . time() . '.' . $extention;
            //Upload Image
            $path = $request->file('image')->storeAs('public/uploads', $fileNameToStore);
            $prestation->image = $fileNameToStore;
        }

        $prestation->titre = $request->titre;
        $prestation->detail = $request->detail;

        if ($request->hasFile('logo')) {
            //Get Just Ext
            $extention = $request->file('logo')->getClientOriginalExtension();
            //FileName To Store
            $fileNameToStore = "item_" . time() . '.' . $extention;
            //Upload Image
            $path = $request->file('logo')->storeAs('public/uploads', $fileNameToStore);
            $prestation->logo = $fileNameToStore;
        }
        $prestation->save();
        $notification = array(
            'message' => 'Prestation modifier avec succès',
            'alert-type' => 'success'
        );
        return redirect()->route('prestations')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prestation = Prestation::findOrFail($id);
        $prestation->delete();
        $notification = array(
            'message' => 'Client supprimer avec succès',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
