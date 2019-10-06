@extends('layouts.app')

@section('content')


<div class="container ">
    <div class="row justify-content-center   ">
        <div class="col-md-9 ">
            <h1 class="display-1 ">Alunos:</h1>
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

                                
                                <form method="POST" action="{{ route('criadoaluno') }}" enctype="multipart/form-data">
                                @csrf
                                        
                                        Nome:
                                        <input name="nome" type="text" class="formulariosquestoes" placeholder="Nome" required>
                                        Email:
                                        <input name="email" type="text" class="formulariosquestoes" placeholder="Email" required>

                                        
                                        <button type="submit" class="btn btn-success">Criar</button>
                                        
                                        <button type="clear" class="btn btn-danger">Cancelar</button>

                                        <br>

                                        <!-- Mostrar os alunos -->
                                     @foreach ($student as $q)
                                    <div class="listquestions row justify-content-center ">
                                        <div class="col-md-4">
                                            <span class="textQuestionList1" >{{$q->nome ?? ''}}</span>
                                        </div>
                                        <div class="col-md-6">
                                                <span class="textQuestionList" >{{$q->email ?? ''}}</span>
                                        </div>
                                        
                                        <div class=" textQuestionList1 col-md-1">
                                        
                                                <button class="button" onclick="" class="">Excluir</button>
                                    </div>
                                    @endforeach                                  
                                        
                                

                                </form>
                        </div>    

                    </div>       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection