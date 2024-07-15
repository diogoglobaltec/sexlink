<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Sevices\ReportService;




class ContadorController extends Controller
{

    public function index(request $request){


        $fuga = ReportService::getTransactionReport();



        dump($fuga);

        return view('pesquisar', compact('fuga'));
    }





}






