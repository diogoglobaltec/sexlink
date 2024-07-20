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
<img src="<?php echo asset("/images/$user->foto")?>" id="imgaleria" width="80" onmouseover="demoVisibility()"><br>
 {{ $user->username  }} <br></a>
{{ $tel }}<br>
  <a href="{{ url( 'https://wa.me/'.$phone) }}">

<button>
whatsapp
</button>
</a><p>



@endforeach
@stop


@section('galeriaOuro')

@foreach ($galeriaOuro as $testar )


<a href= "{{ url('perfil/'.$testar->id_acompanhante.'') }}">

<img src="<?php echo asset("/images/$testar->foto")?>" id="imgaleria" width="80" onmouseover="demoVisibility()"><br>


        {{ $testar->username  }} <br></a>
        {{ $testar->telefone }} <br>
@endforeach
@stop



