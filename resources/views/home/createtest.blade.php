@extends('layouts.app')

@section('content')


<div class="container ">
    <div class="row justify-content-center   ">
        <div class="col-md-9 ">
            <h1 class="display-1 ">Criar prova:</h1>
        </div>
        <div class="col-md-2">
                
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

                                        @foreach ($question as $q)
                                        <div class="listquestions row justify-content-center ">
                                            <div class="col-md-4">
                                                <span class="textQuestionList1" >{{$q->assunto}}</span>
                                            </div>
                                            <div class="col-md-6">
                                                    <span class="textQuestionList" >{{$q->enunciado}}</span>
                                            </div>
                                            <div class=" textQuestionList1 col-md-2">
                                                    <input type="checkbox"/>
                                            </div>
                                        </div>
                                        @endforeach

                                        
                                    
                                        <button type="submit" class="btn btn-success">Criar</button>
                                        
                                        <button type="clear" class="btn btn-danger">Cancelar</button>                                      
                                       
                                

                                </form>
                        </div>    

                    </div>       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection