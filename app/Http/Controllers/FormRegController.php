<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\acompanhante;
use App\Models\underground;
use DB;



class FormRegController extends Controller
{                                                   


    

  

            
        public function store(Request $request)     {



            $nome = $request->username;
            $ver= acompanhante::where('username',$nome)
            ->exists();

            

            if($ver){ 




                dd($request->Descricao);

/*

                DB::table('acompanhantes')
                ->where('username', $nome)
                ->update(['valor'=>$request->valor,
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




                ]);

       */
  











            }
            else
            {
                    //não existe registro irá criar na tabela. 





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




      

    
}
