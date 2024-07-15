<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * USERS + ENDERECOS  
     * 
     * 
     * 
     * 
     *
     * @return void
     */
    public function run()
    {



        $adicionar = 100;

     for($i=0;$i < $adicionar; $i++)
     {

         //teste  para popular database.
         DB::table('users')->insert([
            'name' => 'piranha'.Str::random(5),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('asdfasdf'),
        ]);


     }



      



        //pesquisa tabela users saida ids nomes e outros...
         $idsTabUser = DB::table('users')
         ->get();




 
  
         foreach($idsTabUser as $pegarIds)
{




    $testarId = $pegarIds->id;


    $verificaEnderecos = $idsTabUser->doesntContain('id_acompanhante',$testarId);
    //ids tabela users

    if($verificaEnderecos){

    //vai inserir quando id existente em (users) 
    //não existir em (acompanhantes)

        DB::table('enderecos')
        ->insert([
            'id_acompanhante'=>$pegarIds->id,
            'name'=>$pegarIds->name,
            'telefone'=>'00000000',
            'estado'=>'SP',
            'cidade'=>'São Paulo',
            'regiao'=>'norte',
            'bairro'=>'kaos',
            'rua'=>'nossa',
            'numero'=>'34'
        ]);

    }
    else{
   

        echo "registro:".$pegarIds.'ignorado,já existe na tabela.';

    }


    



        

















/*

    DB::table('enderecos')
    ->insert([
        'id_acompanhante'=>$pegarIds,
        'telefone'=>'00000000',
        'estado'=>'SP',
        'cidade'=>'São Paulo',
        'regiao'=>'norte',
        'bairro'=>'kaos',
        'rua'=>'nossa',
        'numero'=>'34'
    ]);


}


    

                //teste  para popular database.
                DB::table('users')->insert([
                    'name' => 'piranha'.Str::random(5),
                    'email' => Str::random(10).'@gmail.com',
                    'password' => Hash::make('asdfasdf'),
                ]);
        
*/



            }//adicionado para não dar erro retirar apos teste.


    }
}//finaliza classe
