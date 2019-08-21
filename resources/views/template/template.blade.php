<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{$title ?? ''}} ACA - Aplicativo de correção automatizada</title>
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
<body>
        <!-- Navbars -->
        <nav id="menunav" class="navbar fixed-top navbar-light ">
        <div class="container">
            <div class="card card-nav-tabs card-plain">
                <div class="card-header card-header-danger">
                    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="/" data-toggle="tab">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/login" data-toggle="tab">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/register" data-toggle="tab">Cadastrar</a>
                                </li>
                                <li>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
        </nav>

    @yield('content')

    
    
</body>
</html>