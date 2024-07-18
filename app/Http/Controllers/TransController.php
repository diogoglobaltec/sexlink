<?php

namespace App\Http\Controllers;



use DB;
use Illuminate\Http\Request;

class TransController extends Controller
{

    public function saida(){


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


   return view('MulherTrans', [
         'saida'=>$saida,
         'saida2'=>$saida2
             ]);




    }



}
