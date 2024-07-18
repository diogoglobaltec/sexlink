<!DOCTYPE html>

<html>
<head>

 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



</head>





<body>






   @section('formPerfilSaida')



<div class="col">

<div>Fotos </div>

<form action="{{route('deletarFotos')}}" method="post" name='fotoxxx' enctype="multipart/form-data">

@csrf



    @foreach ($conteudoTabelaFoto as $tabelaFoto)



       <img src="images/{{$tabelaFoto->foto}}" style="width:30%">
       <input type="checkbox"  id='checkboxDel' name="fotox[]"
       value="{{$tabelaFoto->foto}}">
       <br><p>

     

       @endforeach



       <input type="submit" class="bg-danger" value="ApagarSelecionados" id="BtnApagar">


      

</form>

       <button onClick="check()">Selecionar todos</button>
       <button onClick="uncheck()">Voltar Seleção</button>
         
      

</div>


   <script>


      function check(){






       document.fotoxxx.elements[0].checked = true


              console.log(document.fotoxxx.elements[1].name);

              var quantidadeFotos = document.fotoxxx.elements.length;

              console.log(quantidadeFotos);

              for(x=0; x < quantidadeFotos; x++)
              {

                     document.fotoxxx.elements[x].checked = true


              }


       }


              function uncheck(){








       console.log(document.fotoxxx.elements[1].name);

       quantidade =  document.fotoxxx.elements.checked = true


       var quantidadeFotos = document.fotoxxx.elements.length;

       console.log(quantidadeFotos);

       for(x=0; x < quantidadeFotos; x++)
       {

              a=document.fotoxxx.elements[x].checked = false

         


       }



      }
      
      




   </script>

  



</div>
@show


    

    <div class="py-12">


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">





            </div>
        </div>
    </div>














<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>




<body>
    </html>

