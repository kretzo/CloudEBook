<?php
    include('conexao.php');

    $nome = $_POST['nomeCad'];
    $sobrenome = $_POST['sobrenomeCad'];
    $email = $_POST['emailCad'];
    $senha = $_POST['senhaCad'];
    $senhaVerif = $_POST['senhaCad2'];

    if($nome != "" && $sobrenome != "" && $email != "" && $senha != "" && $senhaVerif != ""){
        if($senha == $senhaVerif){
            $str = "INSERT INTO tb_usuario (Nome, Sobrenome, Email, Senha) VALUES ('$nome', '$sobrenome', '$email', '$senha')";
            $inserir = mysqli_query($conectar, $str);
            header("Location: login.html");
            exit();
        }
        else{
            header("Location: cadastro.html");
            exit();
            echo "<script>alert('As senhas não coincidem!')</script>";
        }
    }
    else{
        header("Location: cadastro.html");
        exit();
        echo "<script>alert('Preencha todos os campos!')</script>";
    }
?>