<?php
    $email = $_POST['emailLogin'];
    $senha = $_POST['senhaLogin'];

    if($email != "" && $senha != ""){
        include('conexao.php');

        $verific = "SELECT * FROM tb_usuarios WHERE Email = '$email'";
        $loginVerif = mysqli_query($conectar, $verific);

        if($email == $loginVerif){
           header("Location: home.html");
           exit;
        }
        else{
            header("Location: home.html");
           exit;
        }
    }    
?>