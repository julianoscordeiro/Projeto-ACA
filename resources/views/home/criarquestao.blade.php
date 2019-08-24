@extends('layouts.app')

@section('content')


<div class="container ">
    <div class="row justify-content-center   ">
        <div class="col-md-9 ">
            <h1 class="display-1 ">Questão:</h1>
        </div>
        <div class="col-md-2">
                <!-- Busca -->
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
                                <form>
                                        <div class="form-group">
                                            Unidade Curricular:
                                            <select class="form-control">
                                                <option selected>Escolha</option>
                                                <option>Programação</option>
                                            </select>
                                        </div>
                                        <div class="form-group ">
                                                Assunto:
                                                <select class="form-control">
                                                    <option selected>Escolha</option>
                                                    <option>Programação</option>
                                                </select>
                                        </div>

                                        Enunciado:
                                        <input type="text" class="form-control" placeholder="Enunciado">

                                        <h3 class="corblack">Alternativas:</h3>
                                        Alternativa:
                                        <input type="text" class="form-control" placeholder="A">
                                        Alternativa:
                                        <input type="text" class="form-control" placeholder="B">
                                        Alternativa:
                                        <input type="text" class="form-control" placeholder="C">
                                        Alternativa:
                                        <input type="text" class="form-control" placeholder="D">
                                        Alternativa:
                                        <input type="text" class="form-control" placeholder="E">
 
                                        <div class="form-group">
                                                Alternativa Correta:
                                                <select class="form-control">
                                                    <option selected>Escolha</option>
                                                    <option>A</option>
                                                    <option>B</option>
                                                    <option>C</option>
                                                    <option>D</option>
                                                    <option>E</option>
                                                </select>
                                            </div>
                                    
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