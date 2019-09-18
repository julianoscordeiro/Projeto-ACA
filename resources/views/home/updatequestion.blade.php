@extends('layouts.app')

@section('content')


<div class="container ">
    <div class="row justify-content-center   ">
        <div class="col-md-9 ">
            <h1 class="display-1 ">Editar questão</h1>
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
                                
                                @foreach ($question as $q)
                                <form method="POST" action="{{ route('editarquestao', $id)}}" enctype="multipart/form-data">
                                @csrf
                                        
                                        <div class="btn btn-primary">
                                            Escolha sua imagem
                                            <input name="imagem" class="uploadz" type="file" accept="image/*" class="btn btn-primary" /> <br>
                                            
                                        </div>
                                        <br>
                                        
                                        Assunto:
                                        <textarea name="assunto" class="formulariosquestoes">{{$q->assunto}} </textarea>

                                        Enunciado:
                                        <textarea name="enunciado" class="formulariosquestoes" >{{$q->enunciado}} </textarea>

                                        Alternativas:<br>
                                        A:<textarea name="alternativaA" class="formulariosquestoes" placeholder="A">{{$q->alternativaA}}  </textarea>
                                        B:<textarea name="alternativaB" class="formulariosquestoes" placeholder="B">{{$q->alternativaB}}  </textarea>
                                        C:<textarea name="alternativaC" class="formulariosquestoes" placeholder="C">{{$q->alternativaC}}  </textarea>
                                        D:<textarea name="alternativaD" class="formulariosquestoes" placeholder="D">{{$q->alternativaD}}  </textarea>
                                        E:<textarea name="alternativaE" class="formulariosquestoes" placeholder="E">{{$q->alternativaE}}  </textarea>
 
                                        <div class="form-group">
                                                Alternativa Correta:
                                                <select name="resposta" class="formulariosquestoes">
                                                    <option>{{$q->resposta}}</option>
                                                    <option>A</option>
                                                    <option>B</option>
                                                    <option>C</option>
                                                    <option>D</option>
                                                    <option>E</option>
                                                </select>
                                        </div>
                                    
                                        <button type="submit" class="btn btn-success">Salvar</button>
                                        
                                        <button type="clear" class="btn btn-danger">Cancelar</button>                                  
                                        
                                

                                </form>
                                @endforeach
                        </div>    

                    </div>       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection