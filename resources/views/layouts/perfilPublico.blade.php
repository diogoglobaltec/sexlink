<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../css/carImg.css">

  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <title>Perfil</title>
</head>
<body>


<div class="container">
 <div class="row cols-2">
  <div class="col">Perfil<br>
   <div class="slider">
     <div class="slides">

@foreach($perfilgp as $perfil)
<div id="slide-1">
<!--a href="/images/{{$perfil->foto}}">
<img style='height: 100%; width: 100%; object-fit: contain'src="/images/{{$perfil->foto}}"--></a>
</div>
          @endforeach
</div>

@foreach($perfilgp2 as $perfilz2)
@endforeach
          <i class="fa fa-whatsapp" aria-hidden="true">WhatsApp:</i><br>
          <i class="fa fa-whatsapp" aria-hidden="true">Telefone:{{  $perfilz2->telefone }}</i>
  </div>
</div>
<div class="col">Galeria Ouro


@foreach ($galeriaOuro as $testar )
<!--a href= "{{ url('perfil/'.$testar->id_acompanhante.'') }}">
<img src="<?php echo asset("/images/$testar->foto")?>" id="imgaleria[]" width="180" onmouseover="demoVisibility()"--><br>


        {{ $testar->username  }} <br></a>
        {{ $testar->telefone }} <br>
@endforeach






     Acompanhante tenha Seu anúncio grátis aqui !<br>
      Número de visitas hoje:{{ $VisitaUnica }}<br>
    </div>
  </div>
</div>



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>
</html>
