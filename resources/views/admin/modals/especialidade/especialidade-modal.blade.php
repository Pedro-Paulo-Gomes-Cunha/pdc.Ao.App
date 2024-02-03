<div wire:ignore.self data-backdrop='static' class="modal fade" id="especialidade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nova Especialidade</h5>
        <button wire:click='clear'  type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  id="basicform" method="POST" action="{{route('sis.admin.store.especialidade')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="especialidade">Especialidade</label>
              <input name="especialidade" id="especialidade" type="text"   placeholder="Descreve a especialidade" autocomplete="on" class="form-control">
             
          </div>
          
        <div  class="form-group">
        <label for="imagem">Imagem</label>
        <input accept="png,gif,jpeg,jpg"  id="image" type="file" name="imagem" description="image" class="form-control">
       
        <div x-show="isUploading" class="progress progress-striped active w-100 mt-3" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="10">
          <div class="progress-bar progress-bar-success"  data-dz-uploadprogress></div>
        </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </form>
    </div>
  </div>
</div>
  