@extends('layouts.app')

@section('content')


<div class="container ">
    <div class="row justify-content-center   ">
        <div class="col-md-6 ">
            <h1 class="display-1 ">Provas:</h1>
        </div>
        <div class="col-md-3">
                <!-- Busca -->
                
                <div class="md-form active-pink active-pink-2 mb-3 mt-0">
                        <input class="form-control barrapesquisa " type="text" placeholder="Pesquisar" aria-label="Search">
                </div>
        </div>
        <div class="col-md-2">
                <!-- Busca -->
                <a href="/provas/criar" class="btn btn-primary questoesMargin1">Criar prova</a>
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

                                     @foreach ($test as $q)
                                    <div class="listquestions row justify-content-center ">
                                        <div class="col-md-4">
                                            <span class="textQuestionList1" >{{$q->nome ?? ''}}</span>
                                        </div>
                                        <div class="col-md-6">
                                                <span class="textQuestionList" >{{$q->assunto ?? ''}}</span>
                                        </div>
                                        
                                        <div class=" textQuestionList1 col-md-1">
                                        
                                                <button onclick="confirmDelete({{ $q->id }})" class="">Excluir</button>

                                                
                                        </div>
                                        <div class="textQuestionList1 col-md-1">
                                                <button type="button" class="" data-toggle="modal" data-target="#exampleModal">Visualizar</button>
                                        </div>
                                    </div>
                                    @endforeach

                <div>
                    
                
                </div>           


                


                </div>
            </div>
        </div>
    </div>
</div>

@endsection