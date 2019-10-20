@extends('layouts.app')

@section('content')


<div class="container ">
    <div class="row justify-content-center   ">
        <div class="col-md-9 ">
            <h1 class="display-1 ">Provas da turma</h1>
        </div>
            <div class="col-md-2">
                <!-- Adicionar aluno -->               
                <a href="/turmas/provas/add/{{$id}}" class="btn btn-primary questoesMargin1">Adicionar Prova</a>
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

                                <!-- Confirmação de exclusão -->

                                <script>
                                function confirmDelete(id) {
                                    var confirmation = confirm("Deseja realmente excluir?");

                                    if(confirmation){
                                        window.location = "/turmas/provas/delete/"+id;
                                    }   
                                } 
                            </script>
                
                <!-- Formulario -->
                        <div>

                                    
                                <div>
                                    
                                        <!-- Loop que mostra as provas -->
                                        @foreach ($classTests as $q)
                                        <div class="listquestions row justify-content-center ">
                                            <div class="col-md-4">
                                                <b>Nome: </b><span class="textQuestionList1" >{{$q->nome}}</span>
                                            </div>
                                            <div class="col-md-6">
                                                <b>Assunto: </b><span class="textQuestionList1" >{{$q->assunto}}</span>
                                            </div>
                                            <div class=" textQuestionList1 ">
                                                <a href="/turmas/provas/imprimir/{{$q->id}}" class="btn btn-primary btn-sm">Corrigir</a>
                                             </div>
                                            <div class=" textQuestionList1 ">
                                            <a href="/turmas/provas/imprimir/{{$q->id}}" class="btn btn-success btn-sm">Imprimir</a>
                                            </div>
                                        </div>  
                                        @endforeach        

                                    </div>
                        </div>    

                    </div>       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection