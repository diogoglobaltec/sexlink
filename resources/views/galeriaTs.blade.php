<script src="js/imagens.js">
</script>

@extends('galeriaTemplate')



@section('galeriaTs')
@foreach ($galeria as $user)


<a href= "{{ url('perfil/'.$user->id_acompanhante.'') }}">
<img src="<?php echo asset("/images/$user->foto")?>" id="imgaleria[]" width="80" onmouseover="demoVisibility()"><br>



        {{ $user->username  }} <br></a>
        {{ $user->telefone }} <br>
@endforeach
@stop

