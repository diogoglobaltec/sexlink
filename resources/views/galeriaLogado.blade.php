@if (Route::has('login'))
@auth
<!-- LOGADO -->
<div class=" fixed-top container text-center">
  <div class="row">
    <div class="shadow-sm p-2 mb-1 bg-white col">
        <a href="{{ url('/dashboard') }}" >Perfil</a>
    </div>

@endif
@endauth



    <div class="shadow-sm p-2 mb-1 bg-white col-6">
        Sexlink.com.br
    </div>

   <div class="shadow-sm p-2 mb-1 bg-white col">
     informações
    </div>


</div>


@else
