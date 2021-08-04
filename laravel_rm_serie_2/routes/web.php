<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prenom', function(){
    $prenom ="kevin";
    return view('pages.prenom', compact('prenom'));
})->name('prenom');

Route::get('/nom', function(){
    $nom ="baluba";
    return view('pages.nom', compact('nom'));
})->name('nom');

Route::get('/age', function(){
    $age = "25";
    return view('pages.ages', compact('age'));
})->name('age');

Route::get('/caroussel', function(){
    return view('pages.caroussel');
})->name('caroussel');