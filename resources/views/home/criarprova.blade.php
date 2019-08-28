@extends('layouts.app')

@section('content')


<div class="container ">
    <div class="row justify-content-center   ">
        <div class="col-md-9 ">
            <h1 class="display-1 ">Criar prova:</h1>
        </div>
        <div class="col-md-2">
                <a href="/questoes/criar" class="btn btn-primary questoesMargin1">Importar imagem</a>
        </div>
    </div>



    <div class="row justify-content-center ">
        <div class="col-md-12">
            <div class="card">
                <div class=" "></div>

                <div class="card-body fundoContent ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                <!-- Formulario -->
                        <div>
                                <form method="POST" action="{{ route('criadaquestao') }}">
                                                                        
                                        Nome:
                                        <input name="nome" type="text" class="formulariosquestoes" placeholder="Enunciado">
                                        Unidade Curricular:
                                        <input name="unidadecurricular" type="text" class="formulariosquestoes" placeholder="Unidade Curricular">
                                        Assunto:
                                        <input name="assunto" type="text" class="formulariosquestoes" placeholder="Assunto">

                                        Questões:
                                        <!--Busca-->
                                        <div class="col-md-3 md-form active-pink active-pink-2 mb-3 mt-0">
                                            <input class="form-control barrapesquisa " type="text" placeholder="Pesquisar" aria-label="Search">
                                        </div>

                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    
                                        <button type="submit" class="btn btn-success">Criar</button>
                                        
                                        <button type="submit" class="btn btn-danger">Cancelar</button>
                                        <button type="submit" class="btn btn-warning">Rascunho</button>                                       
                                       
                                

                                </form>
                        </div>    

                    </div>       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection