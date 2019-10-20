@extends('layouts.app')

@section('content')


<div class="container ">
    <div class="row justify-content-center   ">
        <div class="col-md-9 ">
            <h1 class="display-1 ">Criar Questão</h1>
        </div>
        <div class="col-md-2">
                <!-- Busca -->
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

                                
                                <form method="POST" action="{{ route('criadaquestao') }}" enctype="multipart/form-data">
                                @csrf
                                        
                                        <div class="btn btn-primary">
                                            Escolha sua imagem
                                            <input name="imagem" class="uploadz" type="file" accept="image/*" class="btn btn-primary" /> <br>
                                            
                                        </div>
                                        <br>
                                        
                                        Assunto:
                                        <input name="assunto" type="text" class="formulariosquestoes" placeholder="Assunto" required>

                                        Enunciado:
                                        <textarea name="enunciado" type="text" class="formulariosquestoes" placeholder="Enunciado" required></textarea>

                                        Alternativas:
                                        <input name="alternativaA" type="text" class="formulariosquestoes" placeholder="A" required>
                                        <input name="alternativaB" type="text" class="formulariosquestoes" placeholder="B" required>
                                        <input name="alternativaC" type="text" class="formulariosquestoes" placeholder="C" required>
                                        <input name="alternativaD" type="text" class="formulariosquestoes" placeholder="D" required>
                                        <input name="alternativaE" type="text" class="formulariosquestoes" placeholder="E" required>
 
                                        <div class="form-group">
                                                Alternativa Correta:
                                                <select name="resposta" class="formulariosquestoes">
                                                    <option>A</option>
                                                    <option>B</option>
                                                    <option>C</option>
                                                    <option>D</option>
                                                    <option>E</option>
                                                </select>
                                        </div>
                                    
                                        <button type="submit" class="btn btn-success">Criar</button>
                                        
                                        <a href="/questoes" class="btn btn-danger">Cancelar</a>                                  
                                        
                                

                                </form>
                        </div>    

                    </div>       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection