@extends('layouts.perfilPublico')
@section('templateOuro')

@foreach ($galeriaOuro as $testar )

<!--a href= "{{ url('perfil/'.$testar->id_acompanhante.'') }}">
<img src="<?php echo asset("/images/$testar->foto")?> " id="img" width="880" onmouseover="demoVisibility()"--><br>


        {{ $testar->username  }} <br></a>
        {{ $testar->telefone }} <br>
@endforeach
@stop


