<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\acompanhante;
use DB;

class BuscarController extends Controller
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
    public function Buscar(Request $request)
    {






       $conta = count($request->input());




/*

       var_dump($request->input('genero'));
       var_dump($request->input('anal'));
       var_dump($request->input('duplaPenetracao'));
       var_dump($request->input('grupal'));
       var_dump($request->input('OralSemCamisinha'));
       var_dump($request->input('FinalizaOral'));
       var_dump($request->input('IdadeMinima'));
       var_dump($request->input('IdadeMaxima'));
       var_dump($request->input('ValorMinimo'));
       var_dump($request->input('ValorMaximo'));
       var_dump($request->input('estado'));
       var_dump($request->input('cidade'));
       var_dump($request->input('regiao'));

*/

            $buscando = acompanhante::query();


            /*
            DB::table('acompanhantes')
            ->where('Genero','=',$request->input('genero'))
            ->get();
            */


        //$uai = acompanhante::query();








    if ($request->has('genero'))
    {
        $buscando->join('fotos','acompanhantes.id_acompanhante','=','fotos.id_acompanhante');
        $buscando->join('enderecos','acompanhantes.id_acompanhante','=','enderecos.id_acompanhante');

        $buscando->groupBy('username');


        $buscando->where('Genero','=',$request->input('genero'));

    }

    if ($request->has('anal'))
    {

        $buscando->where('Anal','=','sim');


    }

    if ($request->has('duplaPenetracao'))
    {


        $buscando->where('DuplaPenetracao','=','sim');


    }

    if ($request->has('grupal'))
    {


        $buscando->where('Grupal','=','sim');


    }

    if ($request->has('OralSemCamisinha'))
    {


        $buscando->where('OralSemCamisa','=','sim');



    }


    if ($request->has('FinalizaOral'))
    {


        $buscando->where('FinalizaOral','=','sim');


    }



    //Selecionar qualquer idade ou intervalo de idade.
    if($request->has('idade'))
    {


     }

    else
    {

        $idadeMin = date('Y') - $request->IdadeMinima;
        $idadeMax = date('Y') - $request->IdadeMaxima;

        $idadeMin=  $idadeMin."-01"."-01";
        $idadeMax=  $idadeMax."-01"."-01";


        $buscando->whereYear('idade','<=',$idadeMin);
        $buscando->whereYear('idade','>=',$idadeMax);


    }




    if($request->has('valor')){

    }
    else {

        $valorMax =     $request->ValorMaximo;




        //valor tem que ser menor que valorMax.
        //valorMax é o maximo que aceito pagar.
        $buscando->where('valor','<=',$valorMax);




    }


    if ($request->has('estado'))
    {

        $estado = $request->estado;

        $buscando->where('estado','=',$estado);

    }
    else
    {

        $buscando->where('estado','=',$estado);

    }





    if ($request->has('cidade'))
    {
        $cidade = $request->cidade;





        if($request->cidade == '')
        {

            $buscando->where('cidade','<>',$estado);


        }else{

            $buscando->where('cidade','=',$cidade);

        }

    }





    if ($request->has('regiao'))
    {


    }




    if($request->genero=="Mulher")
    {


         $BuscaSaida = $buscando->get();
         return view('Mulher',['saida2'=>$BuscaSaida]);



    }

    if($request->genero=="Mulher Trans")
    {

        $BuscaSaida = $buscando->get();
        return view('MulherTrans',['saida2'=>$BuscaSaida]);

    }


    if($request->genero=="Homem")
    {

        $BuscaSaida = $buscando->get();
        return view('Homem',['saida2'=>$BuscaSaida]);


    }

    if($request->genero=="Homem Trans")
    {

        $BuscaSaida = $buscando->get();
        return view('HomemTrans',['saida2'=>$BuscaSaida]);

    }


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
