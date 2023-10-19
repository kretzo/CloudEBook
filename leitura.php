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

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .cabecalho{
        background-color: #2576A8;
        box-shadow: 0px 1px 5px;
        height: 50px;
        width: auto;
        display: flex;
        margin-bottom: 50px;
    }

    .cabecalho .menu{
        width: 40px;
        height: 40px;
        margin: 0px;
        display: inline-flex;
        margin: 20px;
        
    }

    @import url('https://fonts.googleapis.com/css2?family=Martian+Mono:wght@700&display=swap');
    *{
        font-family: 'Martian Mono', monospace !important;
    }
    .cor{
        background-color: #2576A8;
        border: none;
        height: fit-content;
    }

    .cabecalho .logo{
        width: 3000px;
        display: flex;
        justify-content: center;
    }

    .cabecalho .usuario{
        width: 50px;
        height: 50px;
        display: inline-flex;
        justify-content: center;
        margin: 15px;
    }

    .titulo{
        height: 120px;
        width: auto;
        font-family: 'Tahoma';
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .corpo{
        height:fit-content;
        width: 800px;
        margin: auto;
        font-family: 'Tahoma';
        display: flex;
        flex-direction: column;
    }

    .rodape{
        background-color: #dfedf2;
        height: auto;
        width: 100%;
        margin-top: 5%;
        color: white;
        display: flex;
        font-family: 'Tahoma';
        font-weight: 400;
        padding-bottom: 5px;
        align-items: center;
        justify-content: space-between;
        border-top: 0.6px solid #7a7a7a;
    }

    .rodape .iconeFooter{
        height: auto;
        width: 15%;
        margin: 0.7%;
        display: flex;
        justify-content: left;
    }

    .rodape .copyright{
        width: 60%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
        color: white;
        font-family: 'Tahoma';
        font-size: small;
    }

    .rodape .listaInfo{
        height: auto;
        width: 25%;
        margin-right: 2%;
        display: flex;
        justify-content: right;
        flex-direction: row;
    }
    .sobreBtn{
        border: none;
        color: black;
        font-family: 'Tahoma';
        font-size: medium;
        height: fit-content;
        width: fit-content;
        padding: 10px;
    }

    .sobreBtn:hover{
        cursor: pointer;
        color: #dfedf2;
        background-color: #2576A8;
        transition-duration: 0.5s;
    }
    
    a:link { text-decoration: none; }

    body{
        margin: 0%;
        background-color: #dfedf2;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .logo{
        display: flex;
        align-items: center;
        width: 400px;
        height: 80px;
    }

    form  input{
        box-shadow: 1px 1px 1px;
    }

    #logo{
        width: 200px;
        height: 200px;
    }
</style>

<body>
    <header class="cabecalho">
        <div class="dropdown">
            <button class="cor" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="Imagens/rede-na-nuvem-unscreen.gif" alt="" width="50" height="48">
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="sobre.html">👤 SOBRE</a></li>
            </ul>
          </div>
        <div class="logo">
            <a href="home.html"><img src="Imagens/cbc40fce71f045f6b812383fe5fe1742-removebg-preview.png" alt="" id="logo" height="120px"></a>
        </div>
        <div class="dropdown">
            <button class="cor" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="Imagens/procurar-unscreen.gif" alt="" width="50" height="48">
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="faq.html">🗣 SUPORTE</a></li>
            </ul>
          </div>
    </header>

    <embed src="<php? echo $path.$pdf?>" type="application/pdf">

    <footer class="rodape">
        <div class="iconeFooter">
            <img src="Imagens/livro-1--unscreen.gif" alt="" height="50px">
        </div>
        <div class="copyright" style="color: rgb(18, 17, 17)">
            <p>CloudEBook — 2023 © Todos os direitos reservados</p>
        </div>
        <div class="listaInfo">
            <a href="sobre.html" class="sobreBtn">Nossa missão</a>
            <a href="contato.html" class="sobreBtn">Contate-nos</a>
            <a href="faq.html" class="sobreBtn">FAQ</a>
        </div>
    </footer>
</body>
</html>