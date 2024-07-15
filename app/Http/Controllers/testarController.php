<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Services\TesteService;

class testarController extends Controller
{


    private $testando;

    public function testesInjetados(TesteService $testando){
    $this->testando = $testando;

    $this->testando->testando();


    }



}
