@extends('layouts.app')

@section('content')
                
                <!-- Texto de boas vindas -->
                    <div class="text-center">
                        <p class="display-1">Olá Professor</p>
                        <p class="display-3">Seja bem-vindo!</p>
                        <h2>
                            <small class="text-muted">                     
                            <p>O Prova Pro foi pensado para você.</p>
                            <p>Crie, corrija e gerencie suas provas, com segurança, eficiência e qualidade.</p>                                                
                        </h2>  
                    </div>

<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-12">
            <div class="card">
                <div class=" "></div>

                <div class="card-body fundoContent">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif   
                    
                <!-- Texto de intruções de uso -->
                    

                <!-- Carrossel de imagens com etapas do processo de criação -->

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('css/assets/img/car1.png') }}" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('css/assets/img/car2.png') }}" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('css/assets/img/car3.png') }}" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>

                </div>
            </div>
        </div>
    </div>
</div> 

@endsection
