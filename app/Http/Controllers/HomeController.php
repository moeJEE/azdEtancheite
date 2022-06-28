<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Projet;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $projetCount = Projet::get()->count();
        return view('/index', compact('projetCount'));
    }

    public function accueil()
    {
        return view('/accueil');
    }
}
