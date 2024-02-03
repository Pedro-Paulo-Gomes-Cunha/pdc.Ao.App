<div  data-backdrop='static' class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Utilizador</h5>
        <button  type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  id="basicform">
          <div class="form-group">
            <label for="name">Nome completo</label>
            <input id="name" type="text"  name="name" placeholder="Informe o Nome" autocomplete="on" class="form-control">
             
          </div>
         
          <div class="form-group">
              <label for="lastname">Gênero</label>
              <select name="genre" id="genre" wire:model='genre' class="form-control">
                <option value="">--Selecionar--</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
              </select>
             
          </div>
          <div class="form-group">
              <label for="phone">Telefone</label>
              <input   id="phone" type="text" wire:model='phone' name="phone" class="form-control">
             
          </div>
          <div class="form-group">
              <label for="email">E-mail</label>
              <input   id="email" type="email" wire:model='email' name="email" class="form-control">
             
          </div>
          <div class="form-group">
              <label for="photo">Imagem</label>
              <div  class=""
                 
                  >
              <input   id="photo" type="file" wire:model='photo' name="photo" class="form-control w-100">
             
              <div x-show="isUploading" class="progress progress-striped active w-100 mt-3" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="10">
                <div class="progress-bar progress-bar-success" x-bind:style="`width:${progress}%`" data-dz-uploadprogress></div>
              </div>
              </div>
          </div>
          
          <div class="form-group">
            <label for="profile">Nível Acesso</label>
            <select name="profile" id="profile"  class="form-control">
              <option value="">--Selecionar--</option>
              <option value="admin">Administrador</option>
              <option value="medico">Médico</option>
             
            </select>
           
        </div>

        
         
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </form>
    </div>
  </div>
</div>
  