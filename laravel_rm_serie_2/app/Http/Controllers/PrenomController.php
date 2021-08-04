<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrenomController extends Controller
{
    public function index(){
        $prenom = "Kevin";
        return view('pages.prenom', compact('prenom'));
    }
}
