<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreenderecoRequest;
use App\Http\Requests\UpdateenderecoRequest;
use App\Models\endereco;
use Illuminate\Http\Request;
use DB;


class EnderecoController extends Controller
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
    public function create(Request $request)
    {


        $user = DB::table('enderecos')->where('id_acompanhante', $request->IdUser)->first();


        if($user){


            DB::table('enderecos')
            ->updateOrInsert(
        ['id_acompanhante'=>$request->IdUser],
        ['telefone'=>$request->telefone,
        'estado'=>$request->estado,
        'cidade'=>$request->cidade,
                'regiao'=>$request->regiao,
                'bairro'=>$request->bairro,
                'rua'=>$request->rua,
                'numero'=>$request->numero]
    );




        }
        else{


            endereco::create([
                'id_acompanhante'=>$request->IdUser,
                'telefone'=>$request->telefone,
                'estado'=>$request->estado,
                'cidade'=>$request->cidade,
                'regiao'=>$request->regiao,
                'bairro'=>$request->bairro,
                'rua'=>$request->rua,
                'numero'=>$request->numero,
                     ]);




        }

    //return redirect('/dashboard');





    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreenderecoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreenderecoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function show(endereco $endereco)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function edit(endereco $endereco)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateenderecoRequest  $request
     * @param  \App\Models\endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateenderecoRequest $request, endereco $endereco)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function destroy(endereco $endereco)
    {
        //
    }
}
