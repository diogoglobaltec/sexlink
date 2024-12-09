
<x-app-layout>


<x-slot name="header">



<!-- atendimento -->
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


<form action="{{ route('registra_perfil') }}" method="POST" >




@csrf






<input type="hidden" name='idUser' value='{{ auth()->user()->id;}}'>
<input type="hidden" name='username' value='{{ auth()->user()->name;}}'>


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
<input type='date' name='idade' required><h59>(idade irá aparecer no anúncio.)</h59>


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
<textarea name='Descricao' required>
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









            @section('endereco')



<script src="/js/cidades-estados-js/cidades-estados.js">
</script>

<!-- Endereço -->
<button type="button" class="btn btn-primary bg-blue-700 btn" data-bs-toggle="modal" data-bs-target="#endereco">
Endereço</button>

<!-- Modal -->
<div class="modal fade" id="endereco" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Endereço</h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">




      <div class="row">
<div class="col">


</div>

<div class="col">

<form action="{{ route('gravarEnd') }}" method="POST">
@csrf



<input type="hidden" name='IdUser' value='{{ auth()->user()->id;}}'>




   Telefone:<br>
  <input type="text" name="telefone" value=""  required><br>

   Estado:<br><select name="estado" id="estado1" value="SP"></select>
   <br>

   Cidade:<br><select name="cidade" id="cidade1" value="" onblur=pegacidade()></select>

    <br /> <br />


oRegião:<br>
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
<input type="text" name="rua" id="rua"   onblur=pegacidade() required>
<br>
Numero:<br>
<input type="text" name="numero" id="numero" onblur=pegacidade() required>
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



@section('fotos')



<!-- Fotos -->
<button type="button" class="btn btn-primary bg-blue-700 btn" data-bs-toggle="modal" data-bs-target="#fotos">
Fotos</button>

<!-- Modal -->
<div class="modal fade" id="fotos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enviar Fotos.</h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">




      <form action="{{ route('atualiza_perfil') }}" method="post" enctype="multipart/form-data">


        <!-- Add CSRF Token -->
        @csrf


        <input type="file" name='file[]' multiple>
        <input type="hidden" name="id_acompanhante"
        value="{{auth()->user()->id }}"><br>

        Faça uma descrição das fotos enviadas:<br>
        <input type="text" name="descricao" value="">







      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary bg-red-700" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-outline-success">Upload</button>
        </form>

      </div>
    </div>
  </div>
</div>
@show





<!-- comprar  -->
<button type="button" class="btn btn-primary bg-blue-700 btn" data-bs-toggle="modal" data-bs-target="#comprar">
comprar anúncio</button>

<!-- Modal -->
<div class="modal fade" id="comprar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">


Efetue o pagamento no email pix:<br>
globaltecmedia@gmail.com <br>
e entre em contato pelo WhatsApp:<br>
011-94628-1251<br>
          </h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


          <p>
        Valor do  anúncio Mês:<br>
        <div class="text-warning bg-dark">
        Ouro - R$ 1000  *  Primeira página.</div>
        *Topo em todas as páginas.<br>
        *Publicidade direcioanada para contatos.<br>
        *redes sociais<br>

        <div class="text-warning bg-dark">
        Prata - R$ 500 *  Segunda página.</div>
        *Publicidade direcioanada para contatos.<br>
        *redes sociais<br>

        <div class="text-warning bg-dark">
        Bronze - R$ 100 * Terceira página.</div>
        *redes sociais

        <div class="text-light bg-danger">
      Quer ganhar anúncio ouro ?<br>

      </div>
      <div>
      Grave uma cena pornô conosco e <br>
      ganhe anúncio ouro o mês inteiro.<br>
      Contato: 011-94628-1251. <br>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary bg-red-700" data-bs-dismiss="modal">Fechar</button>

</form>

      </div>
    </div>
  </div>
</div>
@show




@section('filmar')
<!-- Filmar -->
<button type="button" class="btn btn-primary bg-blue-700 btn" data-bs-toggle="modal" data-bs-target="#filmar">
filmar conosco</button>

<!-- Modal -->
<div class="modal fade" id="filmar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Perfil</h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


      Para filmar conosco você deve enviar<br>
      suas fotos para análise pelo whatsApp:<br>
      011-94628-1251<br>
      Após filmagem seu anúncio<br>
      ficará disponível<br>
      na galeria ouro e <br>
      trabalharemos na divulgação<br>
      do seu atendimento.<br>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary bg-red-700" data-bs-dismiss="modal">Fechar</button>

</form>

      </div>
    </div>
  </div>
</div>
@show





<div class="container">
   <div class="row">

              <div class="col">




      @foreach ($conteudoTabelaAcompanhante as $tabelaAcompanhante)


              Informações de atendimento:<br>
      Gênero:

      <b class="text-danger">
        {{   $tabelaAcompanhante->Genero;  }}
       </b><br>

       Idade:
       <b class="text-danger">
        {{   $tabelaAcompanhante->idade;  }}
       </b><br>

      Oral sem camisinha:
      <b class="text-danger">
      {{   $tabelaAcompanhante->OralSemCamisa;  }}
      </b><br>


      Finaliza no Oral:
      <b class="text-danger">
             {{$tabelaAcompanhante->FinalizaOral }}
        </b><br>


      Faz Dupla penetração:
      <b class="text-danger">
             {{$tabelaAcompanhante->DuplaPenetracao }} <br>
             </b>

             Faz Anal:
      <b class="text-danger">
             {{$tabelaAcompanhante->Anal }} <br>
             </b>

             Faz Grupal:
      <b class="text-danger">
             {{$tabelaAcompanhante->Grupal }} <br>
             </b>


             Faz sexo com mulheres:
      <b class="text-danger">
             {{$tabelaAcompanhante->Lesbianismo }} <br>
             </b>

             Faz Chuva dourada:
      <b class="text-danger">
             {{$tabelaAcompanhante->ChuvaDourada }} <br>
             </b>

             Deixa Filmar:
      <b class="text-danger">
             {{$tabelaAcompanhante->Filma }} <br>
             </b>

             Deixa Fotografar:
      <b class="text-danger">
             {{$tabelaAcompanhante->Fotografa }} <br>
             </b>

             Está disponível para viagens:
      <b class="text-danger">
             {{$tabelaAcompanhante->Viaja }} <br>
             </b>

             Descrição do seu atendimento:     <br>
             {{$tabelaAcompanhante->descricao }} <br>


      @endforeach

</div>





<div class='col'>


        <h2 class="font-semibold text-xl text-gray-800 leading-tight">








            @if(count($conteudoTabelaAcompanhante)===0 OR count($conteudoTabelaFoto)===0)
            Seu anúncio está:
            <p>Off-Line<p>
            @else
            Seu anúncio está:

            <p><a href={{$underground}}>On-Line.</a><p>
            @endif




            Falta:<br>
            @foreach ($pagamento as $pago)



            @php $pagamento = $pago->statusPagamento; @endphp

            @if($pagamento=='aguardando contato' or $pagamento=='aguardando pagamento')
            Confirmação de pagamento.<br>
            @elseif(count($pagamento)===0)
            igual a zero.
            @endif

            @endforeach

            @if(count($conteudoTabelaAcompanhante)===0)
            Editar Perfil.<br>
            @endif

            @if(count($endereco)===0)
            Enviar Endereço.<br>
            @endif

            @if(count($conteudoTabelaFoto)===0)
            Enviar Fotos.<br>
            @endif

<p>
         <br>Recados:<br>

        @foreach ($recado as $recados)

        {{$recados->recado;}}
        <p>

        <br>Local:<br>
        {{$recados->local;}}

        @endforeach



        </h2>

    </div>

    </x-slot>

</x-app-layout>


<script src="/js/geo.js">
</script>


