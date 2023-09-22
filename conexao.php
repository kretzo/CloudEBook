<?php
    class Conexao{

        private $conectar;

        public function __construct(){
            $server = "localhost";
            $user = "root";
            $password = "";
            $database = "bd_cadastro";
    
            $this -> $conectar = mysqli_connect($server, $user, $password, $database);

            if(!$this -> $conectar){
                die("Falha de Conexão");
            }
        }

        public function getConnection(){
            echo("Ok");
            return $this -> $conectar;
        }

        public function close(){
            if($this -> $conectar){
                mysqli_close();
            }
        }
    }
?>