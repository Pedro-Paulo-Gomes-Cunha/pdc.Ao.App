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
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Especialidades</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="search"  name="search" id="search" class="form-control rounded" placeholder="Pesquisar Utilizador">
                        </div>
                    </div>
                    @include('admin.modals.especialidade.especialidade-modal')
                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#especialidade">Adicionar</button>
                </div>
                <div class="card-body">
                   
                    <div class="table-responsive">
                        <table id="example" class="text-center table table-sm table-striped table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    
                                    <th>Imagem</th>  
                                    <th>Especialidade</th>
                                    <th>Acoes</th>  

                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($especialidades) and $especialidades->count() > 0)
                                    @foreach ($especialidades as $item)
                                    <tr>
                                        <td style="width:10%">
                                            <img class="img-fluid rounded-full" style="width: 3rem;height:3rem; border-radius: 100%" src="{{($item->imagem != null) ? asset('storage/public/especialidade/'.$item->imagem): asset('/not-found.png')}}" alt="Imagem da epecialidade {{$item->especialidade}}">
                                        </td>
                                        <td>{{$item->especialidade}}</td>
                                        <td>
                                            <button  data-toggle="modal" data-target="#user" class="btn btn-sm btn-primary mt-1"><i class="fa fa-edit"></i></button>
                                            
                                            <a href="#delete-{{$item->id}}" data-toggle="modal" data-target="#delete-{{$item->id}}"   class="btn btn-sm btn-danger mt-1 modal-trigger"  ><i class="fa fa-trash"></i></a>
                                            @include('admin.modals.especialidade.especialidade-delete')
                        
                                            @include('admin.modals.especialidade.especialidade-edit')

                                        </td>
                                    </tr>
                                        
                                    @endforeach
                                @else
                                <tr>
                                    <td colspan="9">
                                        <div class="col-md-12 d-flex justify-content-center  align-items-center flex-column" style="height: 25vh">
                                            <i class="fa fa-5x fa-caret-down text-muted"></i>
                                            <p class="text-muted alert alert-info">Nenhuma especialidade Encontrada</p>
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

</div>

<script>
    document.addEventListener('close',function(){
       $("#user").modal('hide');
    })
</script>

@endsection


