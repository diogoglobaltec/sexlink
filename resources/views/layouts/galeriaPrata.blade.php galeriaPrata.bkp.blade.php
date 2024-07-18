@section('prata')
<!--     galeria prata -->


<div class='row'>
<h1> galeria Prata.</h1>

<div class="row row-cols-1 row-cols-md-3 g-4">

@foreach($saida2 as $infogp)
  <div class="col">

    <div class="card h-100">


      <div class="card-body">
        <p class="card-text">

        Nome: {{$infogp->username}}
<br>
        Idade:
      {{
        date("Y") -
        date("Y",strtotime($infogp->idade));
      }}
<br>

        Bairro: {{ $infogp->bairro}}
     <br>
        Estado: {{ $infogp->estado }} -

<br>
 Cidade: {{ $infogp->cidade}}
<br>
 Valor: {{$infogp->valor}}
<!--       galeria: controle interno {{ $infogp->galeria }}
      {{ $infogp->statusPagamento}}
-->
      <br>

      <a href= "{{ url('perfil/'.$infogp->id_acompanhante.'') }}">

      <img style='height: 70%; width: 90%; object-fit: contain' src="/images/{{$infogp->foto}}">
      </a>
      </p>

      </div>
      <div class="card-footer">
        <small class="text-muted">


      -

      R$:{{$infogp->valor}}

        - Telefone:{{$infogp->telefone}}
        -Fotos:
        -videos:

      </small>
      </div>
    </div>
  </div>

  <!-- card de anúncios prive/motel/boate
  <div class="card">
  <div class="card-body">

Anúncio Destaque...  acompanhantes parceiras ou anunciantes...

Propaganda... prives/motéis/sexshopping...


</div>
</div> -->
  @endforeach


    </div> <!--  fim da galeria prata -->
@show
