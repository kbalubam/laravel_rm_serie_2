<?php

use App\Http\Controllers\AgesController;
use App\Http\Controllers\AnimalsController;
use App\Http\Controllers\CarousselController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\NomController;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\PrenomController;
use App\Http\Controllers\TabController;
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

Route::get('/nom',[NomController::class, 'index'])->name('nom');

Route::get('/age', [AgesController::class, 'index'])->name('age');

Route::get('/caroussel', [CarousselController::class,'index'])->name('caroussel');

Route::get('/color', [ColorController::class, 'index'])->name('color');

Route::get('/animals', [AnimalsController::class, 'index'])->name('animals');

Route::get('/plats', [PlatController::class, 'index'])->name('plat');

Route::get('/prenom', [PrenomController::class,'index'])->name('prenom');

Route::get('/tab', [TabController::class,'index'])->name('tab');