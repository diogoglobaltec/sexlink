<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>


$(document).ready(function(){



    $("#xform").submit(function(event){
    event.preventDefault();

    var enviarDados =  {
      selecionado : $("#ajaxxx").val(),
}
$.ajax({
type:'POST',
url:'/underAjax',
data:  { "_token": "{{ csrf_token() }}",   enviarDados },
success:function(data) {
// abaixo funcionou como esperado
//$("#msg").html(enviarDados.selecionado);
$("#msg").html(data);
console.log(data);

}
            });
    });

    $("#EnvNome").submit(function(event){
    event.preventDefault();

    var enviarDados =  {
      selecionado : $("#GpsNomes").val(),
    }

console.log(enviarDados);



$.ajax({
type:'POST',
url:'/underNome',
data:  { "_token": "{{ csrf_token() }}",   enviarDados },
success:function(dataNome) {
// abaixo funcionou como esperado
//$("#msg").html(enviarDados.selecionado);
$("#msgNome").html(dataNome.selecionado);
console.log(dataNome.selecionado);

}
            });
    });













});



</script>


</head>
<body>




<form action="{{route('recado_underground')}}" method="post">
@csrf

<h1>vamos testar essa porra....</h1>

Recados na pagina inicial da GP:<br>
<textarea name='recados'>
</textarea>

<p>

<input type='submit' value='enviar'>















</form>





<div class="">
<form action="{{route('underground')}}" method="POST">
@csrf
@method('put')










Id do acompanhante:<br>
<select name='id_acompanhante'>
@foreach ($saida as $ids)
echo <option>{{$ids->id_acompanhante}}</option>
@endforeach
</select>


<p>

Status de pagamento:<br>

<select name="status">
<option value='pago'>pago</option>
<option value='aguardando pagamento'>aguardando pagamento</option>
</select>

<br>

Galeria:<br>

<select name='galeria'>
<option value='1'>galeria 1</option>
<option value='2'>galeria 2</option>
<option value='3'>galeria 3</option>
<option value='4'>galeria 4</option>
<option value='5'>galeria 5</option>


</select>


<p>
Dia de pagamento:<br>
<input type="date" name='pagoNaData'>
<p>
Dia inicial:<br>
<input type="date" name='iniciaAnuncio'>

<p>
Validade do anúncio:<br>

<select name='validade'>
<option value='30'>30 dias</option>
<option value='14'>14 dias</option>
<option value='7'>7 dias</option>
</select>
<p>
<input type="submit" value="atualizar">
</form>
</div>

<p>
<hr>

<form action="{{route('underAjax')}}" method="POST"  id="xform" >
@csrf
<input type="text" id="ajaxxx" value="teste">
<input type="submit" value="enviar">
</form>

<p>
Nome - id
<form  action="{{route('underNome')}}"  method="POST"  id="EnvNome">
@csrf

<div id="msg">
</div>

<input type="submit" value="Pesquisar">
</form>


<div id="msgNome">

testando kkkkk

</div>




<hr>







@php

/*

    echo "Pagamentos:<br>";

    foreach($saida as $anuncios)
    {
        echo "id do anunciante:  ";
        echo $anuncios->id_acompanhante;
        echo '<br>';

        echo "Nome do anunciante:  ";
        echo $anuncios->username;
        echo '<br>';


        echo "Status:  ";
        echo $anuncios->statusPagamento;
        echo "<br>";
        echo "Data de pagamento : ";
        echo $anuncios->pagoNaData;
        echo "<br>";
        echo "Data de Início do anúncio : ";
        echo $anuncios->iniciaAnuncio;
        echo "<br>";
        echo "Data de Término do anúncio : ";
        echo $anuncios->terminaAnuncio;
        echo "<br>";
        echo "Galeria : ";
        echo $anuncios->galeria;
        echo "<br>";

        echo "<hr>";


    }

*/


@endphp





</body>
</html>
