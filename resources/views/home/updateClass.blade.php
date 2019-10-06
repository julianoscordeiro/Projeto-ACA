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
                                @foreach ($class as $q)

                                @endforeach

                                
                                <form method="POST" action="{{ route('editarturma', $id)}}" enctype="multipart/form-data">
                                @csrf

                                        Nome:<textarea name="nome" class="formulariosquestoes" placeholder="Nome">{{$q->nome}}  </textarea>
                                        Instituição:<textarea name="instituicao" class="formulariosquestoes" placeholder="Instituição">{{$q->instituicao}}  </textarea>
                                        Curso:<textarea name="curso" class="formulariosquestoes" placeholder="Curso">{{$q->curso}}  </textarea>
                                        Período:<textarea name="periodo" class="formulariosquestoes" placeholder="Período">{{$q->periodo}}  </textarea>
                                        Semestre:<textarea name="semestre" class="formulariosquestoes" placeholder="Semestre">{{$q->semestre}}  </textarea>

                                        <button type="submit" class="btn btn-success">Salvar</button>
                                        
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