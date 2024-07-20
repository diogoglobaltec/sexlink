
@section('endereco')


<script src="./js/cidades-estados-js/cidades-estados.js">
</script>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary bg-blue-700 btn" data-bs-toggle="modal" data-bs-target="#endereco">
Endereço</button>

<!-- Modal -->
<div class="modal fade" id="endereco" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Perfil</h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">




      <div class="row">
<div class="col">


</div>

<div class="col">

<form action="{{ route('gravarEnd') }}" method="POST">
@csrf



<input type="text" name='IdUser' value='{{ auth()->user()->id;}}'>


  Telefone:<br>
  <input type="text" name="telefone" value=""  required><br>

   Estado:<br><select name="estado" id="estado" value="SP"></select>
   <br>

   Cidade:<br><select name="cidade" id="cidade" value=""></select>



    <br /> <br />

Região:<br>
<select name="regiao">
<option>norte</option>
<option>sul</option>
<option>leste</option>
<option>oeste</option>
<option>centro</option>
</select>

<br>
Bairro:<br>
<input type='text' name='bairro' required>
<br>
Rua:<br>
<input type="text" name="rua" required>
<br>
Numero:<br>
<input type="text" name="numero"  required>
</div>
</div>

<script language="JavaScript" type="text/javascript" charset="utf-8">
      new dgCidadesEstados({
        cidade: document.getElementById('cidade1'),
        estado: document.getElementById('estado1')
      })
    </script>





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary bg-red-700" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary bg-blue-700">Salvar</button>
</form>

      </div>
    </div>
  </div>
</div>



@show


