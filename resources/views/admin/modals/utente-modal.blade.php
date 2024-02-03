<div wire:ignore.self data-backdrop='static' class="modal fade" id="utente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">  Item</h5>
        <button wire:click='clear'  type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  id="basicform">
         
          <div class="form-group">
              <label for="description">Nome Completo</label>
              <input id="description" type="text" wire:model='description'  placeholder="Descreve o item" autocomplete="on" class="form-control">
             
          </div>
          <div class="form-group">
            <label for="description">Data Nascimento</label>
            <input id="description" type="date" wire:model='description'  placeholder="Descreve o item" autocomplete="on" class="form-control">
           
        </div>
          <div class="form-group">
              <label for="price">Telefone</label>
              <input    id="price" type="number"  description="price" class="form-control">
             
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input    id="email" type="email"  description="email" class="form-control">
           
        </div>
          
          <div class="form-group">
              <label for="category_id">Género</label>
              <select name="category_id"   id="category_id" class="form-control">
                <option value="">--Selecionar Categoria--</option>
                
              </select>
              
          </div>

        <div x-data="{isUploading: false, progress: 0}" class="form-group">
        <label for="image">Imagem</label>
        <input accept="png,gif,jpeg,jpg"  id="image" type="file" wire:model='image' description="image" class="form-control">
       
        <div x-show="isUploading" class="progress progress-striped active w-100 mt-3" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="10">
          <div class="progress-bar progress-bar-success" x-bind:style="`width:${progress}%`" data-dz-uploadprogress></div>
        </div>
        </div>
        <div class="form-group">
        
          <img class="img-fluid rounded" style="width: 100%;height:8rem; object-fit:cover" src="" alt="">
        
        </div>
         
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </form>
    </div>
  </div>
</div>
  