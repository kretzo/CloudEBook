<?php
    if(!isset($_SESSION)) {
        session_start();
    }

    if(!isset($_SESSION["IdUsuario"])) {
        die("Você não tem acesso a esta página. Efetue <a href=\"login.html\">Login</a> para continuar.");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<style>
    .contabox{
        border: 1px solid #2576A8;
        background-color: #f2f2f2;
        display: flex;
        flex-direction: column;
        height: fit-content;
        width: fit-content;
        box-sizing: border-box;
        margin: auto;
        border-radius: 7px;
        padding: 10px 20% 10px 20%;
    }

    .containerdados{
        border: 1px solid #2576A8;
        border-radius: 8px;
        background-color: white;
        display: flex;
        justify-content: center;
        width: 100%;
        margin-bottom: 5px;
        padding-left: 100px;
        padding-right: 100px;
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

    <div class="titulo">
        <h2>Minha Conta</h2>
    </div>

    <form method="post" >
        <div class="contabox">
            <div class="containerdados">
                <h6>Nome: <?php echo $_SESSION['Nome']; ?></h6>
            </div>
            <div class="containerdados">
                <h6>Sobreome: <?php echo $_SESSION['Sobrenome']; ?></h6>
            </div>
            <div class="containerdados">
                <h6>Email: <?php echo $_SESSION['Email']; ?></h6>
            </div>
            <div class="containerdados">
                <h6>Senha: <?php echo str_repeat('*', strlen($_SESSION['Senha'])); ?></h6>
            </div>
            <input type="submit" name="editar" value="Editar">
            <input type="submit" name="excluir" value="Excluir Conta">
        </div>
    </form>

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


<?php
    include('conexao.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['editar'])) {
            header("Location: editarconta.php");
            exit; 
        } elseif (isset($_POST['excluir'])) {
            $conexao = new Conexao();
            $conectar = $conexao->getConnection();

            $userId = $_SESSION["IdUsuario"];

            $sql = "DELETE FROM tb_usuarios WHERE IdUsuario = $userId";

            $inserir = mysqli_query($conectar, $sql);

            $conexao->close();

            if($inserir){
                session_unset();
                session_destroy();
                header("Location: cadastro.html");
            } 
            else{
                die("Falha ao excluir o usuário");
            }                
            $conexao->close();
            exit();
        }
    }
?>