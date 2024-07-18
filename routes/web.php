<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fotoController;
use App\Models\contador;
use App\Http\Controllers\ProductAjaxController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});



Route::get('a', [App\Http\Controllers\LibraryController::class, 'index']);

Route::get('viewteste', [App\Http\Controllers\LibraryController::class, 'viewTeste']);






Route::get('perfil/{id}', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil');



Route::get('/galeria', [App\Http\Controllers\GaleriaController::class, 'saida'])->name('galeria');


Route::get('/MulherTrans', [App\Http\Controllers\GaleriaController::class, 'saidaTs'])->name('MulherTrans');





Route::post('/msgem', [App\Http\Controllers\GaleriaController::class, 'ajaxmsg']);


Route::post('BuscarAcompanhante', [App\Http\Controllers\BuscarController::class, 'Buscar'])->name('BuscarAcompanhante');


Route::get('/pesquisar', [\App\Http\Controllers\ContadorController::class, 'index'])->name('pesquisar');




Route::get('/template', function () {
    return view('index');
});


//testando essa merda ok


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {



        /* verifica se existe cadastro feito pelo cliente */
        $idUser = auth()->user()->id;
        $idName = auth()->user()->name;
        $users = DB::table('acompanhantes')->where('id_acompanhante',$idUser)->exists();




       if($idUser){

        if($idName=='Mestre dos Rabos')
        {

            $Inferno = "underground";

        }
        else{

            $Inferno = '/perfil/'.$idUser;
        }



        $conteudoTabelaAcompanhante = DB::table('acompanhantes')->get()->where('id_acompanhante',$idUser);

        $conteudoTabelaFoto = DB::table('fotos')->get()->where('id_acompanhante',$idUser);

        $enderecoDaGP = DB::table('enderecos')->get()->where('id_acompanhante',$idUser);


        $Anuncio = DB::table('undergrounds')->get()
        ->where('id_acompanhante',$idUser)
        ->where('statusPagamento','aguardando contato');


        $recado = DB::table('recados')->get();




        return view('dashboardPerfil',
        [
        'conteudoTabelaAcompanhante'=>$conteudoTabelaAcompanhante,
        'conteudoTabelaFoto' => $conteudoTabelaFoto,
        'recado'=>$recado,
        'underground'=>$Inferno,
        'pagamento'=> $Anuncio,
        'endereco'=>$enderecoDaGP
        ]);



       }

        if($users==false){


          }
          else{

            if($idName=='Mestre dos Rabos')
            {

                $Inferno = 'underground';

            }
            else{

                $Inferno ='bem vinda';
            }


            $conteudoTabelaAcompanhante = DB::table('acompanhantes')->get()->where('id_acompanhante',$idUser);

            $conteudoTabelaFoto = DB::table('fotos')->get()->where('id_acompanhante',$idUser);

            $recado = DB::table('recados')->get();




            return view('dashboardPerfil',
            [
            'conteudoTabelaAcompanhante'=>$conteudoTabelaAcompanhante,
            'conteudoTabelaFoto' => $conteudoTabelaFoto,
            'recado'=>$recado,
            'underground'=>$Inferno

            ]);



          }

    })->name('dashboard');


    //cria perfil com primeiro modal enviado para usar anúncio.
    Route::post('registra_perfil',[App\Http\Controllers\FormRegController::class, 'store'])->name('registra_perfil');



    route::get('upload', function()
    {
        return view('layouts.formperfilUpload');
    });


    Route::put('atualiza_perfil', [App\Http\Controllers\testeController::class,'testes'])->name('atualiza_perfil');



    Route::post('atualiza_perfil', [App\Http\Controllers\testeController::class,'gravar'])->name('cria_perfil');


    Route::post('uploadVideos', [App\Http\Controllers\videoController::class,'gravar'])->name('uploadVideos');



    Route::post('deletarFotos', [App\Http\Controllers\testeController::class,'deletarFotos'])->name('deletarFotos');


    Route::post('GravarEnd', [App\Http\Controllers\EnderecoController::class,'create'])->name('gravarEnd');



    Route::get('anals', function() {
        $img = Image::make('https://tb-lb.sb-cd.com/t/10618374/1/0/w:1280/t6-enh/anal-gape-webcam-insertion.jpg')->resize(300, 200);
        return $img->response('jpg');
    });




    Route::get('/underground', [App\Http\Controllers\UndergroundController::class, 'index'])->name('underground');



    Route::put('/undergroundzzz', [App\Http\Controllers\UndergroundController::class, 'atualizar'])->name('underground');





Route::post('/ajaxteste', [App\Http\Controllers\UndergroundController::class, 'show'])->name('ajaxteste');

Route::post('/underAjax', [App\Http\Controllers\UndergroundController::class, 'underAjax'])->name('underAjax');

Route::post('/underNome', [App\Http\Controllers\UndergroundController::class, 'underNome'])->name('underNome');







    Route::post('/recado_underground', [App\Http\Controllers\UndergroundController::class, 'recado'])->name('recado_underground');






});





