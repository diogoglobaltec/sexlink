<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManager;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\acompanhante;
use App\Models\foto;
use App\Models\underground;
use DB;


// incluindo o autoload de classes
// importando a classe Manager do Intervention Image
use Intervention\Image\ImageManagerStatic as Image;


class testeController extends Controller
{
    public function testes(Request $request)
{
    acompanhante::where('id_acompanhante',$request->idUser)
    ->update([
        'genero'=>$request->genero,
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
        'descricao'=>$request->Descricao
             ]);
}




    /* grava array de imagens enviadas pelo perfil */

    public function gravar(Request $request)
    {
                foreach($request->file as $saida)
            {
               // $gravaNome = $saida->getClientOriginalName();


                $idDir= $request->user()->id;
                $userGp = $request->user()->name;
                $imageName = $idDir.'_'.$userGp.'_'.
                mt_rand(0,1999999).'.'.$saida->getClientOriginalExtension();

                $img = new foto;
               // $img->foto = $imageName;
                $img->foto = $imageName;
                $img->id_acompanhante = $idDir;
                $img->save();
               // $saida->move('images',$imageName);

                $local = $saida->move('images',$imageName);

               $criarImg2 = Image::make('images/'.$imageName);

               $watermark = Image::make('marca/sexlinkpixels.png');

               $criarImg2->insert($watermark,'bottom-right', 1, 1);

               $criarImg2->save();



               return redirect('/dashboard');



        }
    }


    public function deletarFotos(Request $request)
    {
            $deletar = $request->fotox;

            foreach($deletar as $deletarx)
      {
                var_dump($deletarx);
                $pegar = DB::table('fotos')->where('foto', $deletarx)->delete();
      }
}

/*

        teste de imagens - uso da marca dagua
        feito em apenas uma imagem


está faltando   mover as imagens para o diretório correto
redimensionar as  imagens e por marca dagua




        $idDir = auth()->user()->id;
        $imageName = $idDir.'user'.time().'.'.$request->file->extension();

        $local = $request->file->move(public_path('images'), $imageName);

        $img = Image::make($local->getRealPath())
        ->resize(300, 200);

        $img->save('images/'.$imageName);



            foto::create([

            'id_acompanhante'=>$request->id_acompanhante,
            'foto'=>$imageName,
            'pasta'=>$request->file,
            'capa'=>$request->file,
            'descricao'=>$request->file,


             ]);

        return $img->response('jpg');


*/







}
