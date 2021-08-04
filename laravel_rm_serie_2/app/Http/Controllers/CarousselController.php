<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarousselController extends Controller
{
    public function index(){
        return view('pages.caroussel');
    }
}
