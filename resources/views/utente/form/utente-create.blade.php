@extends('merge.utente.form.index')
@section('content')

<link rel="stylesheet" href="{{asset('/admin/vendor/bootstrap/css/bootstrap.min.css')}}">


<div class="container">

    <div class="px-4 ">
        <div class="p-3 rounded my-3" style="background: #222831; color:#fff ">
         <div class="d-flex justify-content-center">
             <!-- <img width="40" class="img-fluid" src="/assets/images/logotipo.png" alt=""> -->
         </div>
            <h4 class='text-white text-uppercase'>Formulário de cadastro de  Utentes</h4>
    </div>
    
    <!--  -->
    
        @if(session("catch"))
            <div class="alert alert-danger">
                <span>{{session("catch")}}</span>
            </div>
        @endif
    
        <form  action="{{route('sis.store.utente')}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="d-flex my-3 col-md-12 align-items-start ">
                        <div class="col-md-6 me-2">
                                <div class="form-group">
                                    <label for="" class="form-label">Nome hh completo:</label>
                                    <input placeholder="Digite o seu nome" type="text" name="nome" id="nome" class="form-control">
                                   
                                </div>
    
                                <div class="form-group">
                                    <label for="" class="form-label">Data de nascimento:</label>
                                    <input type="date" name="data_nascimento" id="" class="form-control">
                                    
                                    
                                </div>

                                <div class="form-group">
                                    <label for="bi" class="form-label">Nº BI:</label>
                                    <input type="text" name="bi" id="bi" class="form-control">
                                     
                                </div>

                                <div class="form-group">
                                    <label for="genero" class="form-label">Género:</label>
                                    <select class='form-select' name="genero" id="genero">
                                        <option value="" selected disabled>--Selecionar--</option>
                                        <option value="masculino">Masculino</option>
                                        <option value="Feminino">Feminino</option>
                                    </select>
                                    
                                </div>
                               
                            
                                <div class="form-group">
                                    <label for="provincia" class="form-label">Província:</label>
                                    <select class='form-select' name="provincia" id="provincia">
                                        <option value="" selected disabled>--Selecionar--</option>
                                        <option value="Luanda">Luanda</option>
                                        <option value="Huambo">Huambo</option>
                                        <option value="Benguela">Benguela</option>
                                        <option value="Namibe">Namibe</option>
                                    </select>
                                   
                                </div>
                                
                                <div class="form-group">
                                    <label for="municipio" class="form-label">Município:</label>
                                    <input placeholder="Digite o município" type="text" name="municipio" id="municipio" class="form-control">
                                    
                                </div>
                                
                               
                        </div>
    
                        <div class="col-md-6 ">

                            <div class="form-group">
                                <label for="seguro" class="form-label">Seguro:</label>
                                <input placeholder="Digite a seguradora" type="tel" name="seguro" id="telefone" class="form-control">
                               
                            </div>
                            <div class="form-group">
                                <label for="numero_seguro" class="form-label">Nº seguro:</label>
                                <input placeholder="Digite o seu número de seguro" type="tel" name="numero_seguro" id="numero_seguro" class="form-control">
                               
                            </div>
                    
                           
                            <div class="form-group">
                                <label for="foto_anexo" class="form-label">Foto(opcional):</label>
                                <input type="file" name="foto_anexo" id="bilhete_identidade_anexo" class="form-control">
                               
                            </div>
                           
                             
                            <div class="form-group">
                                <label for="telefone" class="form-label">Telefone:</label>
                                <input placeholder="Digite o seu número de telefone" type="tel" name="telefone" id="telefone" class="form-control">
                               
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="" class="form-label">Ponto de referência(opcional):</label>
                                <textarea class="form-control" name="referencia" id=""></textarea>
                               
                            </div>
    
                                <!-- Hidden input -->
                        </div>
    
                         </div>
    
             <!-- Dados de acesso -->
             <div class="col-md-12 ">
                        <hr>
    
                        <div class="form-group">
                            <h4 class="text-uppercase text-uppercase text-muted">Dados de acesso</h4>
                        </div>
    
                        <div class="d-flex align-items-start">
    
                            <div class="col-md-4 mx-1">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email:</label>
                                    <input placeholder="Digite o seu email" class="form-control" type="text" name="email">
                                   
                                </div>
                            </div>
    
                            <div class="col-md-4 mx-2">
                            <div class="form-group">
                                    <label for="password" class="form-label">Senha:</label>
                                    <input placeholder="Digite a sua senha" type="password" name="password" id="password" class="form-control">
                                    @error("password") <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                        </div>
    
            </div>
            <!-- Dados de acesso -->

            <div class="d-flex align-items-center form-group my-1">
                <button type="submit" class="btn btn-md text-white mx-1" style="background: #222831; color:#fff ">Salvar</button>
                <a class="btn btn-md text-white" style="background: #222831; color:#fff " href="/">Página Inicial</a>
            </div>
        </form>
    </div>
</div>
    
@endsection