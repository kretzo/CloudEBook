<?php
    class Login {
        public function __construct(){
            $email = $_POST['emailLogin'];
            $senha = $_POST['senhaLogin'];
    
            if($email != "" && $senha != ""){
                include('Conexao.php');

                $conexao = new Conexao();
                $conectar = $conexao->getConnection();
    
                $verific = "SELECT IdUsuario FROM tb_usuario WHERE Email = '$email' AND Senha = '$senha'";
                $loginVerif = mysqli_query($conectar, $verific);
                
                $count = mysqli_num_rows($loginVerif);
    
                if($count == 1){
                    header("Location: home.html");
                    exit();
                }
                else{
                    echo "<script>alert('Email ou senha incorretos!')</script>";
                }
    
                $conexao -> close();
            } 
            else{
                echo "<script>alert('Preencha todos os dados!')</script>";
            }
        }
    }  
    new Login();
?>