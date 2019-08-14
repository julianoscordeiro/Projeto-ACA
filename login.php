<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet">

    <!-- Icons -->
    <link href="/assets/vendor/nucleo/css/nucleo-icons.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link type="text/css" href="/assets/css/blk-design-system.min.css" rel="stylesheet">

    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style type="text/css">
        #logincss{
            margin: 10% 30% 30% 30%;
        }
    </style>
        
        
    </head>

<body>


<!-- Formulario de login-->
    
    <form id="logincss">
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
            
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
        </div>

        <a href="cadastro.php" >Cadastrar-se </a>
        <a href="resetpass.php" >Esqueci a senha</a><br>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <!-- Core -->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/popper/popper.min.js"></script>
    <script src="/assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- Theme JS -->
    <script src="/assets/js/blk-design-system.min.js"></script>

</body>
</html>

<?php

?>

