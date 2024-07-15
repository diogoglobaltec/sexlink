<?php

namespace App\Http\Controllers;
use App\Models;
use App\Models\acompanhante;
use Illuminate\Http\Request;
use App\Models\underground;


class acompanhanteController extends Controller
{

  

    public function gravar(Request $request)
    {

    acompanhante::create([

        'Genero'=>$request->genero, 
        'valor'=>$request->valor,
        'idade'=>$request->idade,
        'OralSemCamisa'=>$request->OralSemCamisinha, 
        'FinalizaOral'=>$request->FinalizaOral, 
        'DuplaPenetracao'=>$request->DP,
        'Anal'=>$request->Anal, 
        'Grupal'=>$request->Grupal,
        'Lesbianismo'=>$request->Lesbianismo,
        'ChuvaDourada'=>$request->ChuvaDourada,
        'Filma'=>$request->Filma, 
        'Fotografa'=>$request->Fotografa,
        'Viaja'=>$request->Viaja, 
        'descricao'=>$request->Descricao,
        'username'=>$request->username,
        'id_acompanhante'=>$request->idUser,

    ]);


    
    
    underground::create([
        'id_acompanhante'=>$request->idUser,
        'galeria'=>'5',
        'statusPagamento'=>'aguardando contato',
        'statusDeEntrada'=>'entrou',
        'dataDeEntrada'=>'0000-00-00',
        'pagoNaData'=>'0000-00-00', 
        'iniciaAnuncio'=>'0000-00-00',
        'terminaAnuncio'=>'0000-00-00',
                 ]);


}




}






































