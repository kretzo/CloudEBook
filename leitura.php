<?php
    session_start();

    if(!isset($_SESSION["IdUsuario"])) {
        die("Você não tem acesso a esta página. Efetue <a href=\"login.php\">Login</a> para continuar.");
    }

    if(isset($_GET['id'])) {
    $idLivro = $_GET['id'];

    class ConexaoLivros {
        private $conec;

        public function __construct(){
            $server = "localhost";
            $user = "root";
            $password = "";
            $database = "bd_livros";

            $this->conec = mysqli_connect($server, $user, $password, $database);

            if(!$this->conec){
                die("Falha de conexão: Classe ConexaoLivros");
            }
        }

        public function getConnection() {
            return $this->conec;
        }
    
        public function close() {
            if ($this->conec) {
                mysqli_close($this->conec);
            }
        }
    }

    $conexao = new ConexaoLivros();
    $conectar = $conexao->getConnection();

    $str = "SELECT Path FROM tb_livros WHERE IdLivro = {$idLivro};";
    $result = mysqli_query($conectar, $str);

    if(!$result){
        die("Falha de Conexão: Função Livros()");
    }

    if ($row = mysqli_fetch_assoc($result)) {
        $path = $row['Path'];
    }

    $conexao->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leitura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<style>
     .cabecalho{
        background-color:#008f8c;
        box-shadow: 0px 1px 5px;
        width: auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .cabecalho .menu{
        width: 40px;
        height: 40px;
        margin: 0px;
        display: inline-flex;
        margin: 20px;
        background-color: #008f8c;
        
    }


    @import url('https://fonts.googleapis.com/css2?family=Martian+Mono:wght@700&display=swap');
    *{
        font-family: var(--bs-body-font-family) !important;
    }
    .cor{
        background-color: #008f8c;
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
        font-size: 20px;
    }

    .rodape{
        background-color: #008f8c;
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
        border-top: 0.6px solid #0f0d0d;
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
        padding: 5px;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    }

    .sobreBtn:hover{
        cursor: pointer;
        color: #dfedf2;
        background-color: #008f8c;
        transition-duration: 0.5s;
    }
    
    a:link { text-decoration: none; }

    body{
        margin: 0%;
        background-color: #fff;
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
        height: 100px;
    }

    .pdfStyle{
        height: 100vh
    }
</style>

<body>
<header class="cabecalho">
        <div class="dropdown">
            <button class="cor" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="Imagens/rede-na-nuvem-unscreen.gif" alt="" width="50" height="48">
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="home.php">🏠 HOME</a></li>
            </ul>
          </div>
        <div class="logo">
            <a href="home.php"><img src="Imagens/logo.png" alt="logo.png" id="logo" height="120px"></a>
        </div>
        <div class="dropdown">
            <button class="cor" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="Imagens/configuracoes-unscreen.gif" alt="" width="50" height="48">
            </button>
            <ul class="dropdown-menu">
              <?php if(isset($_SESSION['Nome'])): ?>
                <li><a class="dropdown-item" href="minhaconta.php">👤 MINHA CONTA</a></li>
                <li><a class="dropdown-item" href="pagina_livros.php">📚 BIBLIOTECA</a></li>
                <li><a class="dropdown-item"  id="logoutLink" href="logout.php">↩️ SAIR</a></li>
              <?php else: ?>
                <li><a class="dropdown-item" href="login.php">↪️ FAZER LOGIN</a></li>
              <?php endif; ?>
            </ul>
          </div>
    </header>

    <embed class="pdfStyle" src="<?php echo $path; ?>" type="application/pdf">

    <footer class="rodape">
        <div class="iconeFooter">
            <img src="Imagens/livro-1--unscreen.gif" alt="" height="50px">
        </div>
        <div class="copyright" style="color: rgb(18, 17, 17)">
            <p>CloudEBook — 2023 © Todos os direitos reservados</p>
        </div>
        <div class="listaInfo">
            <a href="sobre.php" class="sobreBtn">Nossa missão</a>
            <a href="contato.php" class="sobreBtn">Contate-nos</a>
            <a href="faq.php" class="sobreBtn">FAQ</a>
        </div>
    </footer>
</body>
</html>