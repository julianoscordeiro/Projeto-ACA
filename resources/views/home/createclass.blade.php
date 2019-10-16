@extends('layouts.app')

@section('content')


<div class="container ">
    <div class="row justify-content-center   ">
        <div class="col-md-9 ">
            <h1 class="display-1 ">Criar Turma</h1>
        </div>
            <div class="col-md-2">
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

                                
                                <form method="POST" action="{{ route('criadaturma') }}" enctype="multipart/form-data">
                                @csrf
                                        Nome:
                                        <input name="nome" type="text" class="formulariosquestoes" placeholder="Nome" required>
                                        Instituição:
                                        <input name="instituicao" type="text" class="formulariosquestoes" placeholder="Instituição" required>
                                        Curso:
                                        <input name="curso" type="text" class="formulariosquestoes" placeholder="Curso" required>
                                        Período:
                                        <input name="periodo" type="text" class="formulariosquestoes" placeholder="Período" required>
                                        Semestre:
                                        <input name="semestre" type="text" class="formulariosquestoes" placeholder="Semestre" required>
                                        Alunos:<br>
                                    <!-- Loop que mostra os alunos -->
                                        @foreach ($student as $q)
                                        <div class="listquestions row justify-content-center ">
                                            <div class="col-md-4">
                                                <b>Nome: </b><span class="textQuestionList1" >{{$q->nome}}</span>
                                            </div>
                                            <div class="col-md-6">
                                                <b>Email: </b><span class="textQuestionList1" >{{$q->email}}</span>
                                            </div>
                                            <div class=" textQuestionList1 col-md-2">
                                                <input type="checkbox" name="student_selected[]" value="{{$q->id}}">
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