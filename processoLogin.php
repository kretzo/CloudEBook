<?php
    class Login {

        public function __construct(){         
            $email = $_POST['emailLogin'];
            $senha = $_POST['senhaLogin'];
    
            if($email != "" && $senha != ""){
                include('Conexao.php');

                $conexao = new Conexao();
                $conectar = $conexao->getConnection();
    
                $verific = "SELECT * FROM tb_usuarios WHERE Email = '$email' AND Senha = '$senha'";
                $loginVerif = mysqli_query($conectar, $verific);
                
                $count = mysqli_num_rows($loginVerif);
    
                if($count == 1){
                    session_start();

                    $usuario = mysqli_fetch_assoc($loginVerif);
                    
                    $_SESSION['IdUsuario'] = $usuario['IdUsuario'];
                    $_SESSION['Nome'] = $usuario['Nome'];
                    $_SESSION['Sobrenome'] = $usuario['Sobrenome'];
                    $_SESSION['Email'] = $usuario['Email'];
                    $_SESSION['Senha'] = $usuario['Senha'];

                   header("Location: home.php");
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