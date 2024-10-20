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
                        <a href="{{ url('/dashboard') }}" >Dashboard</a>

                        @else
<div class="Grade">

<div class="Itens">
                        <a href="{{ route('login') }}">Entrar</a>
</div>

<div class="Itens">Faça seu: <a href="{{ route('register')}}">Anúncio</a><br>
Fale conosco: Telegram - Whatsapp.


</div>


</div>

<div class="Grade">

<div class="Itens BackColorGp">


<img src="/marca/peituda.png" class="imgOpaca">

<h3>Garotas</h3><br>

<h4>Grupo Telegram : <br>
Acompanhantes:<br>
<a href="{{route('galeria')}}">Garotas</a><br>
</h4>
</div>

<div class="Itens BackColorTs">


<img src="/marca/tsentrada.jpg" class="imgOpaca">

<h4>Travestis/Trans</h4><br>
<h4>Grupo Telegram : <br>
Acompanhantes:<br>
<a href="{{ route('MulherTrans') }}">Travestis</a><br>
</h4>
</div>





                        @if (Route::has('register'))
                        @endif
                        @endauth
                        @endif


    </body>
</html>
