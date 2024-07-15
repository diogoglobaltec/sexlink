

@section('atendimento')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary bg-blue-700 btn" data-bs-toggle="modal" data-bs-target="#atendimento">
Editar Perfil
</button>

<!-- Modal -->
<div class="modal fade" id="atendimento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Perfil</h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      
<form action="{{ route('atualiza_perfil') }}" method="POST" >




@csrf
@method('put')
<input type="hidden" name='idUser' value='{{ auth()->user()->id;}}'>

Seu Gênero<br>
<select name="genero" id="">
<option>Mulher</option>
<option>Homem</option>
<option>Mulher trans</option>
<option>Homem trans</option>
</select>

<br>

Valor programa hora:<br>
<select name='valor'>

<script>
for(i=50; i<=1000; i)
  {
    document.write("<option  value"+i+">"+i+"</option>");
    i = i+10;
  }
</script>
</select>

<br>


Sua data de nascimento. <br>
<input type='date' name='idade'><h59>(idade irá aparecer no anúncio.)</h59>


<p>


Faz oral sem camisinha ?<br>
<select name="OralSemCamisinha" id="">
<option>sim</option>
<option>não</option>
</select>
<p>

Finaliza no oral ?<br>
<select name="FinalizaOral" id="">
<option>sim</option>
<option>não</option>
</select>
<p> 

Faz anal ?<br>
<select name="Anal" id="">
<option>sim</option>
<option>não</option>
</select>
<p>

Faz dupla penetraçao ? (anal+vaginal)<br>
<select name="DP" id="">
<option>sim</option>
<option>não</option>
</select>
<p>



Faz sexo grupal ?<br>
<select name="Grupal" id="">
<option>sim</option>
<option>não</option>
</select>
<p>

Faz Lesbianismo ? (sexo com mulheres)<br>
<select name="Lesbianismo" id="">
<option>sim</option>
<option>não</option>
</select>
<p>

Chuva dourada ?  (recebe ou urina no companheiro)<br>
<select name="ChuvaDourada" id="ChuvaDourada">
<option>sim</option>
<option>não</option>
</select>
<p>

Deixa filmar o atendimento ?<br>
<select name="Filma" id="">
<option>sim</option>
<option>não</option>
</select>
<p>

Deixa fotografar ?<br>
<select name="Fotografa" id="">
<option>sim</option>
<option>não</option>
</select>
<p>

Aceita viajar com cliente ?<br>
<select name="Viaja" id="">
<option>sim</option>
<option>não</option>
</select>
<p>

descrição do programa.<br>
<textarea name='Descricao'>
</textarea>
<p>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary bg-red-700" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary bg-blue-700">Salvar</button>
</form>

      </div>
    </div>
  </div>
</div>





<script>

/*
function pegar()
{

 // console.log(document.forms[0].elements[4].value);
  console.log(document.getElementById('puta').value);


  for(i=1; i<=1000; i++)
  {



   a= document.getElementById('puta').innerHTML=
   "<option id='puta' value='merdazzz'>"+i+"</option>";

  }



}
*/
  </script>

@show










