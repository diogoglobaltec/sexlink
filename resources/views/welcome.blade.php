<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Entrada</title>

    <link rel="stylesheet" type="text/css" href="/css/welcome.css">



    </head>
    <body>
                         @if (Route::has('login'))
                         @auth

                        @extends('WelcomeLogado')
                        @section('PainelUser')
                        <div class="">
<a href="{{ url('/dashboard') }}" >Painel Usuário.</a>
                        </div>
                        @stop




                        @else
<!-- deslogado -->


                            <div class="">
<a href="{{ route('login') }}">Entrar</a>
                             </div>





                        @if (Route::has('register'))
                        @endif
                        @endauth
                        @endif


    </body>
</html>
