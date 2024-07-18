<script src="js/imagens.js">
</script>

@extends('galeriaTemplate')
@section('NomeTelefone')





@foreach ($saida2 as $user)


<a href= "{{ url('perfil/'.$user->id_acompanhante.'') }}">
<img src="<?php echo asset("/images/$user->foto")?>" id="imgaleria" width="80" onmouseover="demoVisibility()"><br>



        {{ $user->username  }} <br></a>
        {{ $user->telefone }} <br>
@endforeach
@stop


@section('galeriaOuro')

@foreach ($galeriaOuro as $testar )


<!--a href= "{{ url('perfil/'.$testar->id_acompanhante.'') }}">



        {{ $testar->username  }} <br></a>
        {{ $testar->telefone }} <br>
@endforeach
@stop



