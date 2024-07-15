@section('buscador')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Buscar Acompanhantes
</button>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
Acompanhantes

        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="{{route('BuscarAcompanhante')}}" method="POST">
  @csrf

<div class="row">
<div class="col">

Qual gênero?<br>

<select name="genero">
<option value="Mulher">Mulher</option>
<option value="Mulher Trans">Mulher Trans</option>
<option value="Homem">Homem</option>
<option value="Homem Trans">Homem Trans</option>

</select>

<hr>
<p>

<input type="checkbox" name="anal">
Anal:<br>

<input type="checkbox" name="duplaPenetracao">
Dupla Penetração<br>

<input type="checkbox" name="grupal">
Grupal<br>

<input type="checkbox" name="OralSemCamisinha">
Oral  sem camisinha:<br>

<input type="checkbox" name="FinalizaOral">
Finaliza Oral:<br>



<hr>
<div>

<input type="checkbox" name="idade">
    Qualquer idade :<br>

Idade entre:
  <span id="demo2"></span></p>



  <input type="range" min="18" max="100" value="100" class="slider" id="myRange2" name="IdadeMaxima">

  <br>



</div>


<hr>
<div>

<input type="checkbox" name="valor">
    Qualquer Valor :<br>

 Valor máximo  R$:

  <span id="valor2"></span></p>


<div>

Mínimo:
  <select>

  <option>50</option>

  </select>
  <br>


Máximo:
  <select>

<option>100</option>

</select>

</div>


  <input type="range" min="50" max="1000" value="1000" class="slider" id="myValor2" name="ValorMaximo">

  <br>



</div>



</div>
<div class="col">


   Estado: <br>
   <select id="estado1"  name="estado" value="SP"></select><br>
    Cidade: <br>
    <select id="cidade1" name="cidade" value=""></select>



<br>
Região:<br>
<select name="regiao">
<option value="norte">norte</option>
<option value="sul">sul</option>
<option value="leste">leste</option>
<option value="oeste">oeste</option>
<option value="centro">centro</option>
</select>
</div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>
</div>


































<script language="JavaScript" type="text/javascript" charset="utf-8">
      new dgCidadesEstados({
        cidade: document.getElementById('cidade1'),
        estado: document.getElementById('estado1')
      })
    </script>



<script>


// intervalos de idade
//var slider = document.getElementById("myRange");
//var output = document.getElementById("demo");


var slider2 = document.getElementById("myRange2");
var output2 = document.getElementById("demo2");
//output.innerHTML = slider.value;
output2.innerHTML = slider2.value;

/*
slider.oninput = function() {
  output.innerHTML = this.value;
}
*/

slider2.oninput = function() {
  output2.innerHTML = this.value;
}



// intervalos de valores
//var sli = document.getElementById("myValor");
//var out = document.getElementById("valor");
var sli2 = document.getElementById("myValor2");
var out2 = document.getElementById("valor2");
//out.innerHTML = sli.value;
out2.innerHTML = sli2.value;

/*
sli.oninput = function() {
  out.innerHTML = this.value;
}
*/

sli2.oninput = function() {
  out2.innerHTML = this.value;
}













</script>





@show


