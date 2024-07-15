<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AcompanhantesTab extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $todoDB = DB::table('enderecos')
        ->get();



        foreach($todoDB as $pegatudo)
        {

          var_dump($pegatudo->id_acompanhante); 


          DB::table('acompanhantes')
          ->insert([
              'id_acompanhante'=>$pegatudo->id_acompanhante,
              'username'=>$pegatudo->name,
              'Genero'=>'Mulher',
              'valor'=>'sim',
              'idade'=>'1984-04-01',
              'OralSemCamisa'=>'sim',
              'FinalizaOral'=>'sim',
              'DuplaPenetracao'=>'sim',
              'Anal'=>'sim',
              'Grupal'=>'sim',
              'Lesbianismo'=>'sim',
              'ChuvaDourada'=>'sim',
              'Filma'=>'sim',
              'Fotografa'=>'sim',
              'Viaja'=>'sim',
              'descricao'=>'sim'
          ]);


          DB::table('fotos')
          ->insert([
              'id_acompanhante'=>$pegatudo->id_acompanhante,
              'foto'=>'1_github_5469.jpg',
              'pasta'=>'adicionado automaticamente',
              'capa'=>'adicionado automaticamente',
              'descricao'=>'adicionado automaticamente',

          ]);


          DB::table('undergrounds')
          ->insert([
              'id_acompanhante'=>$pegatudo->id_acompanhante,
              'galeria'=>5,
              'statusPagamento'=>'aguardando contato'
            
          ]);





        }

        dd('pegar tudo... porra...');


       


    }
}
