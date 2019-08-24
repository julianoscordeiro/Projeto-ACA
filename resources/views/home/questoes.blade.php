@extends('layouts.app')

@section('content')


<div class="container ">
    <div class="row justify-content-center   ">
        <div class="col-md-6 ">
            <h1 class="display-1 ">Questões:</h1>
        </div>
        <div class="col-md-3">
                <!-- Busca -->
                
                <div class="md-form active-pink active-pink-2 mb-3 mt-0">
                        <input class="form-control barrapesquisa " type="text" placeholder="Pesquisar" aria-label="Search">
                </div>
        </div>
        <div class="col-md-2">
                <!-- Busca -->
                <a href="/questoes/criar" class="btn btn-primary questoesMargin1">Criar Questão</a>
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

                   

                <div>
                    
                
                </div>           




                </div>
            </div>
        </div>
    </div>
</div>
@endsection