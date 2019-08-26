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
                                        
                                        Unidade Curricular:
                                        <input type="text" class="formulariosquestoes" placeholder="Unidade Curricular">
                                        Assunto:
                                        <input type="text" class="formulariosquestoes" placeholder="Assunto">

                                        Enunciado:
                                        <input type="text" class="formulariosquestoes" placeholder="Enunciado">

                                        Alternativas:
                                        <input type="text" class="formulariosquestoes" placeholder="A">
                                        <input type="text" class="formulariosquestoes" placeholder="B">
                                        <input type="text" class="formulariosquestoes" placeholder="C">
                                        <input type="text" class="formulariosquestoes" placeholder="D">
                                        <input type="text" class="formulariosquestoes" placeholder="E">
 
                                        <div class="form-group">
                                                Alternativa Correta:
                                                <select class="formulariosquestoes">
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
                                        a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>a<br>
                                

                                </form>
                        </div>    

                    </div>       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection