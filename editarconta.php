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

    <form method="post">
    <div class="contabox">
        <div class="containerdados">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo $_SESSION['Nome']; ?>">
        </div>
        <div class="containerdados">
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" id="sobrenome" name="sobrenome" value="<?php echo $_SESSION['Sobrenome']; ?>">
        </div>
        <div class="containerdados">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $_SESSION['Email']; ?>">
        </div>
        <div class="containerdados">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" value="<?php echo $_SESSION['Senha']; ?>">
        </div>
        <input type="submit" name="salvar" value="Salvar Alterações">
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

    $nome= $_POST['nome'];
    $sobrenome= $_POST['sobrenome'];
    $email= $_POST['email'];
    $senha= $_POST['senha'];

    if($nome != "" && $sobrenome != "" && $email != "" && $senha != ""){
        $conexao = new Conexao();
        $conectar = $conexao->getConnection();

        $userId = $_SESSION["IdUsuario"];

        $sql = "UPDATE tb_usuarios SET Nome = '$nome', Sobrenome = '$sobrenome', Email = '$email', Senha = '$senha' WHERE IdUsuario = $userId";

        $inserir = mysqli_query($conectar, $sql);

        $conexao->close();

        if($inserir){
            header("location: minhaconta.php");
            exit();
        } 
        else{
            die("Falha na atualização de conta.");
        }
    }
?>

