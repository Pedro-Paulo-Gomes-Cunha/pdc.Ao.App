<div  data-backdrop='static' class="modal fade" id="medico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Médico</h5>
        <button  type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  id="basicform" method="POST" action="{{route('sis.admin.criar.medico')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="name">Nome completo</label>
            <input id="name" type="text"  name="nome" placeholder="Informe o Nome" autocomplete="on" class="form-control">
             
          </div>

          <div class="form-group">
            <label for="nascimento">Data nascimento</label>
            <input id="nascimento" type="date"  name="nascimento"  autocomplete="on" class="form-control">
             
          </div>
          <div class="form-group">
            <label for="municipio">Município</label>
            <input id="municipio" type="text"  name="municipio" placeholder="Informe o municipio" autocomplete="on" class="form-control">
          </div>

          <div class="form-group">
            <label for="codigo_postal">Codigo Postal</label>
            <input id="codigo_postal" type="text"  name="codigo_postal" placeholder="Morada" autocomplete="on" class="form-control">
          </div>

          <div class="form-group">
              <label for="genero">Gênero</label>
              <select name="genero" id="genero"  class="form-control">
                <option value="">--Selecionar--</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
              </select>
             
          </div>

          <div class="form-group">
            <label for="bi">Nº bi</label>
            <input id="bi" type="text"  name="bi" placeholder="Nº BI" autocomplete="on" class="form-control">
             
          </div>

          <div class="form-group">
            <label for="especialidade">Especialidade</label>
            <select name="especialidade" id="especialidade"  class="form-control">
              <option value="">--Selecionar--</option>
              @foreach ($especialidades as $especialidade)
              <option value="{{$especialidade->especialidade}}">{{$especialidade->especialidade}}</option>
              @endforeach
              
            </select>
           
        </div>
          <div class="form-group">
              <label for="telefone">Telefone</label>
              <input   id="telefone" type="number" name="telefone" class="form-control"> 
          </div>
          <div class="form-group">
              <label for="email">E-mail</label>
              <input   id="email" type="email"  name="email" class="form-control">
             
          </div>
         
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </form>
    </div>
  </div>
</div>
  