<?php

namespace App\Http\Controllers;

use App\Models\acompanhante;
use Illuminate\Http\Request;
use App\Models\foto;
use App\Sevices\VisitanteService;
use DB;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id, VisitanteService $teste)
    {


        $VisitaUnica = $teste->VisitanteService();



//fiz saida do contador fazer trait para extender para demais controllers


/*
$testando =DB::table('shetabit_visits')
    -> where('url','http://127.0.0.1:8000/perfil/'.$id)
    ->count();
dump($testando);
 */



visitor()->visit();



        $perfilgp =
         DB::table('acompanhantes')
        ->join('fotos','acompanhantes.id_acompanhante','=','fotos.id_acompanhante')
        ->join('undergrounds','acompanhantes.id_acompanhante','=','undergrounds.id_acompanhante')
        ->where('fotos.id_acompanhante',$id)
        ->get();



        $perfilgp2 = DB::table('enderecos')
        ->where('enderecos.id_acompanhante',$id)
        ->get();



 $galeriaOuro= DB::table('acompanhantes')
    ->join('enderecos','acompanhantes.id_acompanhante','=','enderecos.id_acompanhante')
    ->join('fotos','acompanhantes.id_acompanhante','=','fotos.id_acompanhante')
    ->join('undergrounds','acompanhantes.id_acompanhante','=','undergrounds.id_acompanhante')
    ->where('Genero','Mulher')
    ->where('galeria','1')
    ->groupBy('username')
    ->orderBy('galeria','asc')
    ->get();







        return view('layouts.perfilPublico',
            ['perfilgp'=> $perfilgp,
            'perfilgp2'=> $perfilgp2,
            'galeriaOuro'=> $galeriaOuro,
            'VisitaUnica'=> $VisitaUnica
            ]);


    }

    /**
     * Show the form for creating a new resource.
     *   foto::where('id_acompanhante',$id)
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
