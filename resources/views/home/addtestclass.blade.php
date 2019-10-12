@extends('layouts.app')

@section('content')


<div class="container ">
    <div class="row justify-content-center   ">
        <div class="col-md-11 ">
            <h1 class="display-1 ">Adicionar prova a turma </h1>
        </div>
        </div>
<div class="row justify-content-center ">
    <div class="col-md-12">
        <div class="card">
            <!--<div class=" "></div>
                <div class="card-body fundoContent ">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                    </div>
                    @endif               
                </div>
            </div>-->

 <!-- Busca -->

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

                                
                                
                                        
                                <h2>Escolha a prova:</h2>
                                <form method="POST" action="{{ route('adicionadoprovaturma', $id) }}" enctype="multipart/form-data">
                                @csrf
                                    <!-- Loop que mostra os alunos -->
                                        @foreach ($test as $q)
                                        <div class="listquestions row justify-content-center ">
                                            <div class="col-md-4">
                                                <b>Nome: </b><span class="textQuestionList1" >{{$q->nome}}</span>
                                            </div>
                                            <div class="col-md-6">
                                                <b>Assunto: </b><span class="textQuestionList1" >{{$q->assunto}}</span>
                                            </div>
                                            <div class=" textQuestionList1 col-md-2">
                                                <input type="radio" name="test_selected" value="{{$q->id}}">
                                            </div>
                                        </div>
                                        @endforeach

                                        <button type="submit" class="btn btn-success">Criar</button>
                                        
                                        <a href="/turmas" class="btn btn-danger">Cancelar</a>             

                                </form>
                        </div>    

                    </div>       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection