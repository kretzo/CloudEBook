<?php
    class Cadastro{

        private $inserir;

        public function __construct() {
            $nome = $_POST['nomeCad'];
            $sobrenome = $_POST['sobrenomeCad'];
            $email = $_POST['emailCad'];
            $senha = $_POST['senhaCad'];
            $senhaVerif = $_POST['senhaCad2'];

            if($senha == $senhaVerif){
                include('conexao.php');

                if($nome != "" && $sobrenome != "" && $email != "" && $senha != "" && $senhaVerif != ""){
                    $str = "INSERT INTO tb_usuario (Nome, Sobrenome, Email, Senha) VALUES ('$nome', '$sobrenome', '$email', '$senha')";
                    
                    $this -> $inserir = mysqli_query($conectar, $str);

                    header("Location: login.html");
                    exit();
                }
                else{
                    echo("Preencha todos os campos!");
                }
            }
            else{
                echo("As senhas não coincidem!");
            }
        }
    }
?>