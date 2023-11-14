<?php
    class ConexaoLivros{

        private $conec;

        public function __construct(){
            $server = "localhost";
            $user = "root";
            $password = "";
            $database = "bd_livros";

            $this -> conec = mysqli_connect($server, $user, $password, $database);

            if(!$this -> conec){
                die("Falha de conexão: Classe ConexaoLivros");
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

    function Livro() {
        $conexao = new ConexaoLivros();
        $conectar = $conexao->getConnection();

        $idLivro = 1;

        $str = "SELECT Path FROM tb_livros WHERE IdLivro = {$idLivro};";
        $result = mysqli_query($conectar, $str);

        if(!$result){
            die("Falha de Conexão: Função Livros()");
        }

        if ($row = mysqli_fetch_assoc($result)) {
            $path = $row['Path'];
        }

        $conexao->close();
    
        return $path;
    }

    $path = Livro();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leitura</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

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

        <embed class="pdfStyle" src="<?php echo $path; ?>" type="application/pdf">

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