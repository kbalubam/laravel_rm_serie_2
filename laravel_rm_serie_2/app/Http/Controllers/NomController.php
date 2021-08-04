<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NomController extends Controller
{
    public function index(){
        $nom = "Baluba";
        return view('pages.nom', compact('nom'));
    }
}
