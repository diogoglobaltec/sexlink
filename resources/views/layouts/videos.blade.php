

@section('videos')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary bg-blue-700 btn" data-bs-toggle="modal" data-bs-target="#videos">
videos</button>

<!-- Modal -->
<div class="modal fade" id="videos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Perfil</h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="{{ route('uploadVideos') }}" method="post" enctype="multipart/form-data">


<!-- Add CSRF Token -->
@csrf


<input type="file" name='file[]' multiple> 
<input type="hidden" name="id_acompanhante" 
value="{{auth()->user()->id }}"><br>

Faça uma descrição dos vídeos enviados:<br>
<input type="text" name="descricao" value="">


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


