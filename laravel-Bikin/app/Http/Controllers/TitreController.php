<?php

namespace App\Http\Controllers;

use App\Models\Titre;
use Illuminate\Http\Request;

class TitreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function show(Titre $titre)
    {
        return view('back.titre.show',compact('titre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function edit(Titre $titre)
    {
        return view('back.titre.edit', compact('titre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Titre $titre)
    {

        $request->validate([
            "titre"=>['required'],
        ]);
        $titre ->titre = $request ->titre;
        $titre ->save();
        return redirect()->route('titres.show', $titre->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titre $titre)
    {
        $titre->delete();
        return redirect()->route('titres.show');
    }
}
