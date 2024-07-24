
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


    <title>Galeria Sexlink</title>
</head>
<body>






@if (Route::has('login'))
@auth
<!-- LOGADO -->
<div class=" fixed-top container text-center">
  <div class="row">
    <div class="shadow-sm p-2 mb-1 bg-white col">
        <a href="{{ url('/dashboard') }}" >Perfil</a>
    </div>

    <div class="shadow-sm p-2 mb-1 bg-white col-6">
        Sexlink.com.br
    </div>

   <div class="shadow-sm p-2 mb-1 bg-white col">
     informações
    </div>


</div>

@else
   @if (Route::has('register'))
<!-- DESLOGADO -->


<div class="container ">
<div class=" fixed-top container text-center ">
<div class="row ">

<!-- primeira coluna -->
<div class="shadow-sm p-2 mb-1 bg-white col">
Bem vindo !
</div>
<!-- Fim primeira cluna -->

<!-- segunda coluna -->
    <div class="shadow-sm p-2 mb-1 bg-white col-6">
   Sexlink.com.br
    </div>
<!-- fim segunda coluna -->

<!-- terceira coluna -->
<div class="shadow-sm p-2 mb-1 bg-white col">
<div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
Links Acesso
  </a>
  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="{{ route('login') }}">Entrar</a></li>
   <li><a class="dropdown-item" href="{{ route('register') }}">Anunciar</a></li>
    <!-- <li><a class="dropdown-item" href="#"></a></li> -->
  </ul>
    </div> <!-- dropdown -->
    <a href="" ></a>
    </div>
</div>
</div>
<!-- fim terceira coluna -->


<!-- galeria -->

<!-- template para cima -->




<div class="row">
<div class="shadow-sm-6 pt-5  mt-5 bg-danger col">
@foreach ($saida2 as $user)
<img src="<?php echo asset("/images/$user->foto")?>" width="200"> <br>

        {{ $user->username  }} <br>
    {{ $user->telefone }} <br>





@endforeach
</div>



<div class="shadow-sm-6 pt-5  mt-5 bg-danger col ">
<div class="position-fixed">
sdfasdfaf

</div>
</div>



<div class="shadow-sm-6 pt-5  mt-5 bg-danger col">

<div class="position-fixed">
s
ijoiopipoipoiasdfoiasoifdaosifduasoi

</div>
</div>






</div>  <!-- fechamento do row -->




<!-- template para baixo -->





<!-- fim galeria -->

<div class="row">
<div class="shadow-sm p-1 mt-3 bg-white col">

               {!! $saida2->links('pagination::bootstrap-5') !!}

site by: z3r0

</div>
</div>



    @endif
    @endauth



<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>


         function getMessage() {
            $.ajax({
               type:'POST',
               url:'/msgem',
               data:"_token= {{ csrf_token(); }}",
               success:function(data) {


                   var i = 0;
               console.log(data);
                   $("#msg").html(data[i]['username']);
                   ++i;
               }
            });
         }




</script>
    @endif
<script src="js/cidades-estados-js/cidades-estados.js">
</script>

</body>
</html>














