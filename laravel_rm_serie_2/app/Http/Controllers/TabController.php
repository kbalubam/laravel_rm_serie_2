<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabController extends Controller
{
    public function index(){
        $garniture = [
            "crayon",
            "gommes",
            "bic",
            "feutre",
            "equerre",
        ];
        return view('pages.tab',compact('garniture'));
    }
}
