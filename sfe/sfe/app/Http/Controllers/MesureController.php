<?php

namespace App\Http\Controllers;

use App\Mesure;
use App\Ville;
use App\Region;
use Illuminate\Http\Request;

class MesureController extends Controller
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
        $Mesure = new Mesure();
        $Mesure->contenu = $request->contenu;
        $Mesure->save();
        $villes = Ville::all();
        $regions = Region::all();
        return view('setting')->with('villes', $villes)->with('regions', $regions)->with('message', "Mesure created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mesure  $mesure
     * @return \Illuminate\Http\Response
     */
    public function show(Mesure $mesure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mesure  $mesure
     * @return \Illuminate\Http\Response
     */
    public function edit(Mesure $mesure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mesure  $mesure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mesure $mesure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mesure  $mesure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mesure $mesure)
    {
        //
    }
}
