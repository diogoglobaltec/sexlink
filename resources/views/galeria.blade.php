<script src="js/imagens.js">
</script>

@extends('galeriaTemplate')
@section('NomeTelefone')


@foreach ($saida2 as $user)



<div class="container">
  <div class="row">
    <div class="col">

<?php
//Limpa caracteres do telefone.
$tel = $user->telefone;
$phone = preg_replace('/\D+/', '', $tel);
?>

<a href= "{{ url('perfil/'.$user->id_acompanhante.'') }}">
<img src="<?php echo asset("/images/$user->foto")?>" id="imgaleria" width="180" onmouseover="demoVisibility()"><br>
<br></a>
<br>
 <p>





    </div>
    <div class="col">
Nome:{{$user->username}} <br>
Cidade: {{$user->cidade}} <br>
Região:{{$user->regiao }} <br>
Telefone:{{$phone }}
 <a href="{{ url( 'https://wa.me/55'.$phone) }}"><br>
<button>
whatsapp
</button>
</a>

    </div>
  </div>
</div>



<div class="row">
<div class="col">


<!-- Div de fechamento da galeria -->
</div>
</div>
<!-- Div de fechamento da galeria -->

<hr>


@endforeach
@stop




@section('galeriaOuro')

@foreach ($galeriaOuro as $testar )


<a href= "{{ url('perfil/'.$testar->id_acompanhante.'') }}">
<img src="<?php echo asset("/images/$testar->foto")?>" id="imgaleria" width="180" onmouseover="demoVisibility()"></a><br>


<?php
//Limpa caracteres do telefone.
$tel = $testar->telefone;
$phone = preg_replace('/\D+/', '', $tel);
?>

Cidade:{{ $testar->cidade }} - Região:{{ $testar->regiao }} <br>
<a href="{{ url( 'https://wa.me/55'.$phone) }}">
<button>
whatsapp
</button>
</a>



<div>
</div>


        @endforeach
@stop



