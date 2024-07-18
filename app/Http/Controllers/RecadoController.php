<?php

namespace App\Http\Controllers;

use App\Models\recado;
use Illuminate\Http\Request;

class RecadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function recado()
    {





        recado::create([
            'id_acompanhante'=>$request->


                 ]);




             

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\recado  $recado
     * @return \Illuminate\Http\Response
     */
    public function show(recado $recado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\recado  $recado
     * @return \Illuminate\Http\Response
     */
    public function edit(recado $recado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\recado  $recado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recado $recado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\recado  $recado
     * @return \Illuminate\Http\Response
     */
    public function destroy(recado $recado)
    {
        //
    }
}
