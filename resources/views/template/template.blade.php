<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{$title ?? ''}} ProvaPro - Aplicativo de correção automatizada</title>
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
        

    @yield('content')

    
    
</body>
</html>