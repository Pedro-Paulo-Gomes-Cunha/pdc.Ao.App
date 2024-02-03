@extends('merge.admin.index')
@section('title','Utilizadores')
@section('content')


<div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">PAINEL DE ADMINISTRADOR</h2>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-medico"><a href="#" class="breadcrumb-link">Medicos</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-medicos-center flex-wrap">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="search"  name="search" id="search" class="form-control rounded" placeholder="Pesquisar Utilizador">
                        </div>
                    </div>
                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#medico">Adicionar</button>
                </div>
                <div class="card-body">
                   
                    <div class="table-responsive">
                        <table id="example" class="text-center table table-sm table-striped table-hover" style="width:100%">
                            <thead>
                                <tr>
                                   
                                    <th>Imagem</th>
                                    <th>Nome</th>
                                    <th>Gênero</th>
                                    <th>Telefone</th>
                                    <th>E-mail</th>
                                    <th>Acesso</th>
                                    <th>Conta</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($medicos) and $medicos->count() > 0)
                                    @foreach ($medicos as $medico)
                                    <tr>
                                        <td style="width:10%">
                                            <img class="img-fluid rounded-full" style="width: 3rem;height:3rem; border-radius: 100%" src="{{($medico->photo != null) ? asset('storage/profiles/'.$medico->photo): asset('/not-found.png')}}" alt="Imagem da categoria {{$medico->description}}">
                                        </td>
                                        <td>{{$medico->nome}}</td>
                                        <td>{{$medico->genero}}</td>
                                        <td>{{$medico->telefone->telefone ?? ''}}</td>
                                        <td>{{$medico->email}}</td>
                                        <td>{{$medico->perfil}}</td>
                                        @if ($medico->status === 'verificado')
                                        <td><span class="badge badge-success" style="cursor: pointer" >Ativa</span>
                                        </td>
                                        @else
                                        <td><span class="badge badge-danger" style="cursor: pointer" >Inativa</span></td>
                                        @endif
                                        <td>
                                            <button   class="btn btn-sm btn-primary mt-1 "><i class="fa fa-edit"></i></button>
                                            <button  data-toggle="modal" data-target="#delete-{{$medico->id}}"  class="btn btn-sm btn-danger mt-1"><i class="fa fa-trash"></i></button>
                                            @include('admin.modals.medicos.medico-delete')
                                        </td>
                                    </tr>
                                        
                                    @endforeach
                                @else
                                <tr>
                                    <td colspan="9">
                                        <div class="col-md-12 d-flex justify-content-center align-medicos-center flex-column" style="height: 25vh">
                                            <i class="fa fa-5x fa-caret-down text-muted"></i>
                                            <p class="text-muted">Nenhum Utilizador Encontrado</p>

                                        </div>
                                    </td>
                                </tr>
                                @endif
                              
                            </tbody>
                         
                        </table>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    @include('admin.modals.medicos.medico-modal')
</div>

<script>
    document.addEventListener('close',function(){
       $("#user").modal('hide');
    })
</script>

@endsection


