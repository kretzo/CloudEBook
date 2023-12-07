<?php
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['texto'];
    // $anexos = $_POST['anexos'];

    if($nome == "" || $email == "" || $mensagem == ""){
        echo "Preencha os campos obrigatórios!";
    }
?>