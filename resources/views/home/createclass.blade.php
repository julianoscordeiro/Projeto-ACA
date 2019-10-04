@extends('layouts.app')

@section('content')


<div class="container ">
    <div class="row justify-content-center   ">
        <div class="col-md-9 ">
            <h1 class="display-1 ">Questão:</h1>
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

                                
                                <form method="POST" action="{{ route('criadaturma') }}" enctype="multipart/form-data">
                                @csrf
                                        Nome:
                                        <input name="nome" type="text" class="formulariosquestoes" placeholder="Assunto" required>
                                        Instituição:
                                        <input name="instituicao" type="text" class="formulariosquestoes" placeholder="Assunto" required>
                                        Curso:
                                        <input name="curso" type="text" class="formulariosquestoes" placeholder="Assunto" required>
                                        Período:
                                        <input name="periodo" type="text" class="formulariosquestoes" placeholder="Assunto" required>
                                        Semestre:
                                        <input name="semestre" type="text" class="formulariosquestoes" placeholder="Assunto" required>
                                        Alunos:
                                        <input name="alunos" type="number" class="formulariosquestoes" placeholder="Assunto" required>

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