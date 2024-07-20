<script src="js/imagens.js">
</script>

@extends('galeriaTemplate')
@section('NomeTelefone')





@foreach ($saida2 as $user)







<?php
//Limpa caracteres do telefone.
$tel = $user->telefone;
$phone = preg_replace('/\D+/', '', $tel);
?>

<a href= "{{ url('perfil/'.$user->id_acompanhante.'') }}">
<img src="<?php echo asset("/images/$user->foto")?>" id="imgaleria" width="180" onmouseover="demoVisibility()"><br>
 {{ $user->username  }} <br></a>
<br>
  <a href="{{ url( 'https://wa.me/55'.$phone) }}">
<button>
whatsapp
</button>
</a><p>
<hr>


@endforeach
@stop


@section('galeriaOuro')

@foreach ($galeriaOuro as $testar )


<a href= "{{ url('perfil/'.$testar->id_acompanhante.'') }}">

<img src="<?php echo asset("/images/$testar->foto")?>" id="imgaleria" width="280" onmouseover="demoVisibility()"><br>

<?php
//Limpa caracteres do telefone.
$tel = $testar->telefone;
$phone = preg_replace('/\D+/', '', $tel);
?>


        {{ $testar->username  }} <br></a>
         <a href="{{ url( 'https://wa.me/55'.$phone) }}">


<button>
whatsapp
</button>



        @endforeach
@stop



