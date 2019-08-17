<?php 

    include_once("connect.php");

    $nome_usuario = $_POST['usuario'];
    $email_usuario = $_POST['emailUsuario'];
    $senhaS = $_POST['senha']; //Senha ainda não criptografada
    $senha = md5($senhaS);
    //echo "$nome_usuario - $email_usuario";
    $result_usuario = "INSERT INTO usuario(usuarioNome, emailUsuario, senha) VALUES ('$nome_usuario','$email_usuario', '$senha')";
    $query_select = "SELECT emailUsuario FROM usuario WHERE emailUsuario = '$email_usuario'";
    $select = mysqli_query($conn,$query_select);
    $array = mysqli_fetch_array($select);
    $logarray = $array['emailUsuario'];
    

    if($nome_usuario == "" || $nome_usuario == null || $email_usuario == "" || $email_usuario == null || $senhaS == "" || $senhaS == null ){
        echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=/cadastro.php'>
                    <script type='text/javascript'>
                        alert('Nenhum campo pode ficar vazio.');
                    </script>
                ";
     
    }else{

        if($logarray == $email_usuario){
 
            echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=/cadastro.php'>
                    <script type='text/javascript'>
                        alert('Usuario já existe.');
                    </script>
                ";
     
          }else{

            $resultado_usuario = mysqli_query($conn, $result_usuario);
            if(mysqli_affected_rows($conn) != 0){
                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=/login.php'>
                    <script type='text/javascript'>
                        alert('Usuario cadastrado com Sucesso.');
                    </script>
                ";    
            }else{
                echo "
                    
                    <script type='text/javascript'>
                        alert('O Usuario não foi cadastrado com Sucesso.');
                    </script>
                ";    
            }
        }
}
