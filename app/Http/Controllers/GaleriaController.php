<?php
namespace App\Http\Controllers;


use Shetabit\Visitor\Traits\Visitable;
use App\Models\User;
use App\Models\acompanhante;
use App\Sevices\DiogoService;
use App\Sevices\VisitanteService;
use Carbon\Carbon;
use Awssat\Visits\Models\Visit as VisitsModelsVisit;
use Awssat\Visits\Visits;
use Coderflex\Laravisit\Concerns\CanVisit;
use Coderflex\Laravisit\Models\Visit;
use Illuminate\Database\Eloquent\Model;
use Shetabit\Visitor\Models\Visit as ModelsVisit;
use Illuminate\Http\Request;
use DB;

use Shetabit\Visitor\Visitor;

class GaleriaController extends Controller
{




public function saidaTs(VisitanteService $teste)
{

//retorna visita realizada por cada ip, tabela shetabit_visits;j
 $VisitaUnica = $teste->VisitanteService();
//grava uma visita no DB shetabit_visits;
 visitor()->visit();

//echo acompanhante::find(1);
 //gerando galerias inicial  mulher
    //mudanças:
    //fazer aparecer em primeiro galerias adicionadas
    //espontaneamente pelo site
    //depois galerias adicionadas pelo bot


    $saida = DB::table('users')
    ->join('fotos','users.id','=','fotos.id_acompanhante')
    ->get();


    $saida2 = DB::table('acompanhantes')
    ->join('enderecos','acompanhantes.id_acompanhante','=','enderecos.id_acompanhante')
    ->join('fotos','acompanhantes.id_acompanhante','=','fotos.id_acompanhante')
    ->join('undergrounds','acompanhantes.id_acompanhante','=','undergrounds.id_acompanhante')
    ->where('Genero','Mulher Trans')
    ->groupBy('username')
    ->orderBy('galeria','asc')
    ->paginate(10);




//para retirar o anúncio do ar:
//data do termino tem que ser menor que a data atual.
//ao quando a data atual ultrapassar a data do término
//o anúncio expira.
//para isso basta comparar data atual com data do término.
//


  $galeriaOuro= DB::table('acompanhantes')
    ->join('enderecos','acompanhantes.id_acompanhante','=','enderecos.id_acompanhante')
    ->join('fotos','acompanhantes.id_acompanhante','=','fotos.id_acompanhante')
    ->join('undergrounds','acompanhantes.id_acompanhante','=','undergrounds.id_acompanhante')
    ->where('Genero','Mulher Trans')
    ->where('galeria','1')
    ->groupBy('username')
    ->orderBy('galeria','asc')
    ->get();










    return view('galeria', [
         'saida'=>$saida,
         'saida2'=>$saida2,
         'VisitaUnica'=> $VisitaUnica,
         'galeriaOuro' => $galeriaOuro
    ]);
}











public function saida(VisitanteService $teste )
{
//retorna visita realizada por cada ip, tabela shetabit_visits;j
 $VisitaUnica = $teste->VisitanteService();
//grava uma visita no DB shetabit_visits;
 visitor()->visit();

//echo acompanhante::find(1);
 //gerando galerias inicial  mulher
    //mudanças:
    //fazer aparecer em primeiro galerias adicionadas
    //espontaneamente pelo site
    //depois galerias adicionadas pelo bot


    $saida = DB::table('users')
    ->join('fotos','users.id','=','fotos.id_acompanhante')
    ->get();


    $saida2 = DB::table('acompanhantes')
    ->join('enderecos','acompanhantes.id_acompanhante','=','enderecos.id_acompanhante')
    ->join('fotos','acompanhantes.id_acompanhante','=','fotos.id_acompanhante')
    ->join('undergrounds','acompanhantes.id_acompanhante','=','undergrounds.id_acompanhante')
    ->where('Genero','Mulher')
    ->groupBy('username')
    ->orderBy('galeria','asc')
    ->paginate(10);


  $galeriaOuro= DB::table('acompanhantes')
    ->join('enderecos','acompanhantes.id_acompanhante','=','enderecos.id_acompanhante')
    ->join('fotos','acompanhantes.id_acompanhante','=','fotos.id_acompanhante')
    ->join('undergrounds','acompanhantes.id_acompanhante','=','undergrounds.id_acompanhante')
    ->where('Genero','Mulher')
    ->where('galeria','1')
    ->groupBy('username')
    ->orderBy('galeria','asc')
    ->get();


    return view('galeria', [
         'saida'=>$saida,
         'saida2'=>$saida2,
         'VisitaUnica'=> $VisitaUnica,
         'galeriaOuro'=> $galeriaOuro
    ]);
}

public function ajaxmsg(){

    $data = DB::table('acompanhantes')
        ->where('Genero','Mulher')
        ->get();

    return $data;

    }



}
