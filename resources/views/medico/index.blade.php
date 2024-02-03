
@extends('merge.medico.index')
@section('title','Dashboard')

@section('content')

<div class="container mt-4">
    <div class="row mt-4">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header mt-4">
                <h2 class="pageheader-title">Consultas marcadas para com sr(a)</h2>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Consultas</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                
                       
                                @if (isset($consultas) and $consultas->count() > 0)

                                <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="search" wire:model.live='search' name="search" id="search" class="form-control rounded" placeholder="Pesquisar Utentes">
                                        </div>
                                    </div>
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#user">Imprimir</button>
                                </div>
                                <div class="card-body">
                                   
                                    <div class="table-responsive">

                                <table id="example" class="text-center table table-sm table-striped table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            
                                            <th>Nome</th>
                                            <th>Gênero</th>
                                            <th>Telefone</th>
                                            <th>Exame marcado</th>
                                            <th>Data a ser realizada</th>
                                           
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($consultas as $item)
                                    <tr>
                                        <td style="width:10%">
                                            <img class="img-fluid rounded-full" style="width: 3rem;height:3rem; border-radius: 100%" src="{{($item->photo != null) ? asset('storage/profiles/'.$item->photo): asset('/not-found.png')}}" alt="Imagem da categoria {{$item->description}}">
                                        </td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->lastname}}</td>
                                        <td>{{$item->genre}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->profile}}</td>
                                        @if ($item->status == '1')
                                        <td><span class="badge badge-success" style="cursor: pointer" >Ativa</span>
                                        </td>
                                        @else
                                        <td><span class="badge badge-danger" style="cursor: pointer" >Inativa</span></td>
                                        @endif
                                        <td>
                                            <button  data-toggle="modal" data-target="#user" class="btn btn-sm btn-primary mt-1"><i class="fa fa-edit"></i></button>
                                            <button  class="btn btn-sm btn-danger mt-1"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                        
                                    @endforeach
                                @else
                                <tr>
                                    <td colspan="9">
                                        <div class="col-md-12 d-flex justify-content-center align-items-center flex-column" style="height: 25vh">
                                            <i class="fa fa-5x fa-caret-down text-muted"></i>
                                            <p class="text-muted alert alert-info"> Sr(a) Abel, Nenhuma consulta marcada consigo de momento.</p>
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

<script src="{{asset('/admin/libs/js/chart.min.js')}}"></script>





