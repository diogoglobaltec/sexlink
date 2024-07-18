
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



<div class="container ">
<div class=" fixed-top container text-center ">
<div class="row ">

@if (Route::has('login'))
@auth


<!-- primeira coluna -->
<div class="shadow-sm p-2 mb-1 bg-white col">

logado

</div>



@else
<!-- primeira coluna -->

<div class="shadow-sm p-2 mb-1 bg-white col">

deslogado


</div>
<!-- Fim primeira coluna deslogado -->
@endif
@endauth






<!-- segunda coluna  BOTÕES DA CATEGORIA GAROTAS/TRANS/GAROTOS -->


<div class="shadow-sm p-2 mb-1 bg-white col-6">
<div class="btn-group" role="group" aria-label="Basic outlined example">

@if(request()->path()=='galeria')
 <a href="{{ route('galeria') }}" class="btn btn-danger">Garotas</button></a>
@else
 <a href="{{ route('galeria') }}" class="btn btn-outline-danger">Garotas</button></a>
@endif



@if(request()->path()=='MulherTrans')
 <a href="{{ route('MulherTrans') }}" class="btn btn-danger">Trans</button></a>
 @else
 <a href="{{ route('MulherTrans') }}" class="btn btn-outline-danger">Trans</button></a>
@endif
 <a href="" class="btn btn-outline-danger">Garotos</button></a>


</div>
</div>
<!-- fim segunda coluna BOTÕES DA CATEGORIA GAROTAS/TRANS/GAROTOS -->

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
<div class="row ">
<div class="shadow-sm-6 pt-5  mt-5 bg-danger col">
<!--  NomeTelefone é section da galeria.blade.php -->
@yield('NomeTelefone')
</div>


<div class="text-sm-start shadow-sm-1 pt-1  mt-5  col" >
<div class="position-fixed  ">
<div class="bg-white mb-1">
visitas hoje:{{   $VisitaUnica  }} - <a href="">avançado</a>
Grave conosco  e  ganhe o anúncio grátis !!
<br>
</div>

<div class="border bg-white">

<h5>galeria ouro </h5>
@yield('galeriaOuro')


</div>
<div class="bg-white mt-3">

</div>
</div>
</div>
<!-- fechamento do row -->
<!-- fim galeria -->


<!-- INICIO DA PAGINAÇÃO -->

<div class="row">
<div class="col">

               {!! $saida2->links('pagination::bootstrap-5') !!}

</div>
</div>
<!-- fim do DESLOGADO -->




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
    <!-- endif -->

<script src="js/cidades-estados-js/cidades-estados.js">
</script>
</script>







</body>
</html>














