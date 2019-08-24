<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$title ?? ''}} ACA - Aplicativo de correção automatizada</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet">

    <!-- Icons -->
    <link href="{{asset('css/assets/vendor/nucleo/css/nucleo-icons.css')}}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">


    <!-- Theme CSS -->
    <link type="text/css" href="{{asset('css/assets/css/blk-design-system.min.css')}}" rel="stylesheet">

    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meu css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    
    
</head>
<body class="fundoDashboard">

        <!-- Menu Responsivo -->
        <div class="container">
            <div class=" row justify-content-center ">
                <div class="col-sm-10">
                    <div class="topnav" id="myTopnav">
                                        
                                        <a href="/home" ">Inicio</a>
                                        <a href="/questoes">Questões</a>
                                        
                                        <a href="/provas">Provas</a>
                                        <a href="/turmas">Turmas</a>
                                        <a href="/correcao">Correção</a>
                                        <a href="/relatorios">Relatórios</a>                                      
                                        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                        
                    </div>  
                    
                    
                </div> 
                <div class="col-sm-2">
                    <div >   
                    <div class="btn-group dropdown usuariobtn">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                     <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </div>
                        </div>   
                    </div>            
                    
                   


                </div> 
                 
            </div>  
               
        </div>
        


    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>
    </div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>
</html>