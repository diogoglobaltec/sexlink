@extends('layouts.perfilPublico')
@section('templateOuro')

@foreach ($galeriaOuro as $testar )


{{ dump('teste...'); }}


<!--a href= "{{ url('perfil/'.$testar->id_acompanhante.'') }}">
<img src="<?php echo asset("/images/$testar->foto")?>" id="imgaleria[]" width="180" onmouseover="demoVisibility()"--><br>



        {{ $testar->username  }} <br></a>
        {{ $testar->telefone }} <br>
@endforeach
@stop


