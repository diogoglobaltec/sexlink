<?php

namespace App\Http\Controllers;

use App\Models\acompanhante;
use App\Models\contador;
use App\Models\underground;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class UndergroundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $status = db::table('undergrounds')
        ->join('acompanhantes','undergrounds.id_acompanhante','=','acompanhantes.id_acompanhante')
        ->get();


        $user = auth()->user()->name;

        if($user=='Mestre dos Rabos'){

        return view('layouts.underground', ['saida'=> $status]);


        }



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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function atualizar(Request $request)
    {
        $diaAtual = $request->iniciaAnuncio;
        $somado = $request->validade;
        $somaDias = date('Y-m-d', strtotime("+".$somado." days",strtotime($diaAtual)));


            underground::where('id_acompanhante',$request->id_acompanhante)
            ->update([
             'galeria'=>$request->galeria,
             'statusPagamento'=>$request->status,
             'pagoNaData'=>$request->pagoNaData,
             'iniciaAnuncio'=>$request->iniciaAnuncio,
             'terminaAnuncio'=>$somaDias,
                     ]);

    }












    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function underAjax(Request $request){
//  dump($request->enviarDados);



foreach ($request->enviarDados as $value) {
            $pegarValor = $value;
        }

$recebeQuery = acompanhante::where('username','like',$pegarValor.'%')->get();

/*
echo 'nome - id:<br>';
 */



echo '<select name="GpsNomes" id="GpsNomes" >';


foreach ($recebeQuery as $value)
{

          $nomesGp[] = $value->username;


          echo '<option value="'.$value->username.'" name="'.$value->id_acompanhante.'">'.$value->username.' -ID- '.$value->id_acompanhante.'</option>';

          echo $value->username;
}


     echo '</select>';

//dump($nomesGp);


/*
echo '</select>';

echo '<input type="submit" value="pesquisar">';

 */

 // return  $merda;


/* finaliza função */}








    /**
     * Display the specified resource.
     *
     * @param  \App\Models\underground  $underground
     *
     * @return \Illuminate\Http\Response
     */
    public function show(underground $underground, Request $request)
    {



        dd($request);



    }



public function underNome(Request $request)
    {



      return  $request->enviarDados;


    }










    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\underground  $underground
     * @return \Illuminate\Http\Response
     */
    public function edit(underground $underground)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\underground  $underground
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, underground $underground)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\underground  $underground
     * @return \Illuminate\Http\Response
     */
    public function destroy(underground $underground)
    {
        //
    }
}
