<?php
    $email = $_POST['emailLogin'];
    $senha = $_POST['senhaLogin'];

    if($email != "" && $senha != ""){
        include('conexao.php');

        $verific = "SELECT IdUsuario FROM tb_usuario WHERE Email = '$email' AND Senha = '$senha'";
        $loginVerif = mysqli_query($conectar, $verific);
        // $row = mysqli_fetch_array($loginVerif, MYSQLI_ASSOC);

        $count = mysqli_num_rows($loginVerif);

        if($count == 1){
           header("Location: home.html");
           exit;
        }
        else{
            echo "<script>alert('Email ou senha incorretos!')</script>";
        }
    }
    else{
        echo "<script>alert('Preencha todos os dados!')</script>";
    }
?>