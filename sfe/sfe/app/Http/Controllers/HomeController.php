<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $listcas = \DB::select( \DB::raw("SELECT regions.nom as nameregion,SUM(cas.nombre) as nbcas from cas,regions,villes WHERE regions.id = villes.id_region AND cas.id_ville = villes.id AND cas.type = 'confirme' GROUP BY regions.nom") );
        
        $confirmedcas = \DB::select( \DB::raw("SELECT sum(cas.nombre) as conf from cas where cas.type='confirme'") );


        $testedcas = \DB::select( \DB::raw("SELECT sum(cas.nombre) as tested from cas where cas.type='teste'") );
        $decescas = \DB::select( \DB::raw("SELECT sum(cas.nombre) as death from cas where cas.type='deces'") );
        $gueriscas = \DB::select( \DB::raw("SELECT sum(cas.nombre) as guer from cas where cas.type='gueris'") );

        $gueriscas = \DB::select( \DB::raw("SELECT sum(cas.nombre) as guer from cas where cas.type='gueris'") );

        $date = \Carbon\Carbon::now();
        $today =  $date->format('Y-m-d');

        $query = "SELECT cas.type,sum(cas.nombre) as nb from cas WHERE DATE(cas.date) = '".$today."' GROUP BY cas.type";

        $todaycas = \DB::select( \DB::raw("SELECT regions.nom as nameregion,SUM(cas.nombre) as nbcas from cas,regions,villes WHERE regions.id = villes.id_region AND cas.id_ville = villes.id AND DATE(cas.date) = '".$today."' AND cas.type = 'confirme' GROUP BY regions.nom") );

        $caslastmounth = \DB::select( \DB::raw($query) );

        $mounthlycas = \DB::select( \DB::raw("SELECT SUM(cas.nombre) as nbcas,MONTHNAME(cas.date) FROM cas WHERE cas.type = 'confirme' GROUP BY MONTHNAME(cas.date)"));

        $stack = array();
        
        // foreach ($listcas as $cas) {
        //     $found = false;
        //     foreach ($todaycas as $tcas) {
        //         if($tcas->nameregion == $cas->nameregion) {
        //             if ($found == true){
        //                 break;
        //             }
        //             array_push($stack, array($cas->nameregion, $cas->nbcas, $tcas->nbcas));
        //             $found = true;
        //         }
        //         else {
        //             if ($found == true){
        //                 break;
        //             }
        //             array_push($stack, array($cas->nameregion, $cas->nbcas, 0));
        //             $found = true;
        //         }
        //     }

        //     // for ($i=0; $i < count($todaycas); $i++) { 
        //     //     $found = false;
        //     //     if($todaycas[$i]->nameregion == $cas->nameregion) {
        //     //         array_push($stack, array($cas->nameregion, $cas->nbcas, $todaycas[$i]->nbcas));
        //     //         $found = true;
        //     //     }
        //     //     else {
        //     //         if ($found)
        //     //             break;
        //     //         else
        //     //             array_push($stack, array($cas->nameregion, $cas->nbcas, 0));
        //     //     }
        //     // }
        // }

        // dd($stack);
        return view('dashboard')->with('listcas',$listcas)
                                ->with('confirmedcas',$confirmedcas)
                                ->with('testedcas',$testedcas)
                                ->with('decescas',$decescas)
                                ->with('gueriscas',$gueriscas)
                                ->with('caslastmounth',$caslastmounth)
                                ->with('mounthlycas', $mounthlycas)
                                ->with('todaycas',$todaycas);
    }
}
