@extends('layouts.app')

@section('content')


<div class="container ">
    <div class="row justify-content-center   ">
        <div class="col-md-9 ">
            <h1 class="display-1 ">Criar Turma</h1>
        </div>
            <div class="col-md-2">
                <!-- Adicionar aluno -->               
                <a href="/alunos" class="btn btn-primary questoesMargin1">Adicionar Aluno</a>
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
                                        Alunos:
                                        
                                        <input name="alunos" type="number" class="formulariosquestoes" placeholder="Alunos" required>

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