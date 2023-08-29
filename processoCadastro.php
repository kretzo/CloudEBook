<?php
    include('conexao.php');

    $nome = $_POST['nomeCad'];
    $sobrenome = $_POST['sobrenomeCad'];
    $email = $_POST['emailCad'];
    $senha = $_POST['senhaCad'];

    $str = "INSERT INTO tb_usuario (Nome, Sobrenome, Email, Senha) VALUES ('$nome', '$sobrenome', '$email', '$senha')";

    $inserir = mysqli_query($conectar, $str);    
?>