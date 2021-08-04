<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgesController extends Controller
{
    public function index(){
        $age = "25";
        return view('pages.ages', compact('age'));
    }
}
