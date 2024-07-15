<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\foto;
use App\Models\video;
use DB;


class videoController extends Controller
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
    public function gravar(Request $request)
    {
        

        foreach($request->file as $saida)
        {

           

           // $gravaNome = $saida->getClientOriginalName();
           
       
            $idDir= $request->user()->id;
            
            $userGp = $request->user()->name;

            $imageName = $idDir.'_'.$userGp.'_'.
            mt_rand(0,1999999).'.'.$saida->getClientOriginalExtension();  



            
            $video = new video;
           // $img->foto = $imageName;
            $video->video = $imageName;
            $video->id_acompanhante = $idDir;
            $video->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
