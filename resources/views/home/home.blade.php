@extends('layouts.app')

@section('content')
                
                <!-- Texto de boas vindas -->
                    <div class="textohome">
                        <p class="display-1">Olá Professor,</p>
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

                <div class="card-body fundoContent ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif   
                    
                    <div class="textohome">
                        <h3>
                            <small class="text-muted">
                            O processo de criação de provas do Prova Pro possui 4 etapas.
                            Crie suas questões e provas, gerencie suas turmas e faça a correção de seus exames, seguindo o fluxo de utilização abaixo:   
                        </h3> 
                    </div>

                    <!-- Carrocel de imagens -->

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="https://i.pinimg.com/originals/f1/90/ef/f190ef1c41595ad20eafb36313a0f395.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="https://wallpaperplay.com/walls/full/d/0/b/193021.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="https://i.pinimg.com/originals/7f/28/d8/7f28d83b07cf8b48ca26391c72d3b8c2.jpg" alt="Third slide">
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
