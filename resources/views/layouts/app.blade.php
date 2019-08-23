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

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    
</head>
<body class="fundoDashboard">


    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light fundoNavBarDashboard shadow-sm">
        
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    ACA
                </a>

            
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                                <!-- Menus -->


                        <div class="card card-nav-tabs card-plain">
                            <div class="card-header card-header-danger">
                                <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <ul class="nav nav-tabs" data-tabs="tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#home" data-toggle="tab">Inicio</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#updates" data-toggle="tab">Questões</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#history" data-toggle="tab">Provas</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#history" data-toggle="tab">Turmas</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#history" data-toggle="tab">Correção</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#history" data-toggle="tab">Relatórios</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                        </div>
                    </ul>
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <div class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </div>
                            @if (Route::has('register'))
                                <div class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </div>
                            @endif
                        @else
                            <div class="nav-item  dropdown">
                                <a id="navbarDropdown" class=" dropdown-toggle btn btn-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


  
</body>
</html>
