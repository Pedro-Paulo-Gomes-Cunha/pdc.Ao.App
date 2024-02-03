<div wire:ignore.self data-backdrop='static' class="modal fade" id="delete-{{$medico->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Excluir </h5>
        <button wire:click='clear'  type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
          <div class="form-group">
            <p>Tem certeza que deseja excluir? {{$medico->nome}} </p>
          </div>
     
      <div class="modal-footer">
        <button aria-hidden="true" class=" modal-close btn btn-default">Cancelar</button>
      
        <form action="{{route('sis.admin.eliminar.medico',$medico->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="  btn btn-primary">Excluir</button>
        </form>
      </div>
  </div>
</div>

  