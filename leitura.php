<?php
    class ConexaoLeitura{

        private $conec;

        public function __construct(){
            $server = "localhost";
            $user = "root";
            $password = "";
            $database = "bd_livros";

            $this -> conec = mysqli_connect($server, $user, $password, $database);

            if(!$this -> conec){
                die("Falha de conexão");
            }
        }

        public function getConnection() {
            return $this -> conec;
        }
    
        public function close() {
            if ($this -> conec) {
                mysqli_close($this -> conec);
            }
        }
    }
?>