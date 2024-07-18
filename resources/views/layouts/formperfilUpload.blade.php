<html>
<head>

 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">









    
</head>

<x-app-layout>
<body>
 


{{$idUser = auth()->user()->id;}}




<!-- Button trigger modal -->
<button type="button" class="btn btn-primary bg-blue-700 " data-bs-toggle="modal" data-bs-target="#exampleModal">
 Editar Perfil
</button>






<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Perfil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


<form action="{{ route('atualiza_perfil') }}" method="POST">




@csrf
@method('put')
<input type="hidden" name='idUser' value='{{$idUser}}'>

Seu Gênero<br>
<select name="genero" id="">
<option>mulher</option>
<option>homem</option>
<option>travesti</option>
<option>homem trans</option>


</select>
<p>

Sua data de nascimento. <br>
<input type='date' name='idade'><h59>(idade irá aparecer no anúncio.)</h59>


<p>

Faz oral sem camisinha ?<br>
<select name="OralSemCamisinha" id="">
<option>sim</option>
<option>não</option>
</select>
<p>

Finaliza no oral ?<br>
<select name="FinalizaOral" id="">
<option>sim</option>
<option>não</option>
</select>
<p> 

Faz anal ?<br>
<select name="Anal" id="">
<option>sim</option>
<option>não</option>
</select>
<p>

Faz dupla penetraçao ? (anal+vaginal)<br>
<select name="DP" id="">
<option>sim</option>
<option>não</option>
</select>
<p>



Faz sexo grupal ?<br>
<select name="Grupal" id="">
<option>sim</option>
<option>não</option>
</select>
<p>

Faz Lesbianismo ? (sexo com mulheres)<br>
<select name="Lesbianismo" id="">
<option>sim</option>
<option>não</option>
</select>
<p>

Chuva dourada ?  (recebe ou urina no companheiro)<br>
<select name="ChuvaDourada" id="ChuvaDourada">
<option>sim</option>
<option>não</option>
</select>
<p>

Deixa filmar o atendimento ?<br>
<select name="Filma" id="">
<option>sim</option>
<option>não</option>
</select>
<p>

Deixa fotografar ?<br>
<select name="Fotografa" id="">
<option>sim</option>
<option>não</option>
</select>
<p>

Aceita viajar com cliente ?<br>
<select name="Viaja" id="">
<option>sim</option>
<option>não</option>
</select>
<p>

descrição do programa.<br>
<textarea name='Descricao'>
</textarea>
<p>



</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary bg-red-700" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary bg-blue-700">Salvar</button>
</form>

      </div>
    </div>
  </div>
</div>

















<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>

    <div class="py-12">


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">





            </div>
        </div>
    </div>
</x-app-layout>







<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>



<body>
    </html>

