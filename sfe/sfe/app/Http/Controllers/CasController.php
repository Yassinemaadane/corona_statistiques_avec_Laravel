<?php

namespace App\Http\Controllers;

use App\Cas;
use App\Region;
use App\Ville;
use Illuminate\Http\Request;

class CasController extends Controller
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

        $Cas = new Cas();
        $Cas->type = "teste";
        $Cas->date = $request->input('date');
        $Cas->nombre = $request->input('nombre_teste');
        $Cas->id_ville = $request->input('ville');
        $Cas->save();

        $Cas = new Cas();
        $Cas->type = "confirme";
        $Cas->date = $request->input('date');
        $Cas->nombre = $request->input('nombre_confirme');
        $Cas->id_ville = $request->input('ville');
        $Cas->save();

        $Cas = new Cas();
        $Cas->type = "gueris";
        $Cas->date = $request->input('date');
        $Cas->nombre = $request->input('nombre_gueris');
        $Cas->id_ville = $request->input('ville');
        $Cas->save();

        $Cas = new Cas();
        $Cas->type = "deces";
        $Cas->date = $request->input('date');
        $Cas->nombre = $request->input('nombre_deces');
        $Cas->id_ville = $request->input('ville');
        $Cas->save();
                
        $villes = Ville::all();
        
        $regions = Region::all();
        return view('setting')->with('villes', $villes)->with('regions', $regions)->with('message', "Cas created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cas  $cas
     * @return \Illuminate\Http\Response
     */
    public function show(Cas $cas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cas  $cas
     * @return \Illuminate\Http\Response
     */
    public function edit(Cas $cas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cas  $cas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cas $cas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cas  $cas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cas $cas)
    {
        //
    }

}
