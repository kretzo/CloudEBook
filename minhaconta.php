<?php
    if(!isset($_SESSION)) {
        session_start();
    }

    if(!isset($_SESSION["IdUsuario"])) {
        die("Você não tem acesso a esta página. Efetue <a href=\"login.php\">Login</a> para continuar.");
    }

    include('conexao.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['editar'])) {
            header("location: editarconta.php");
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
                header("Location: cadastro.php");
            } 
            else{
                die("Falha ao excluir o usuário");
            }                
            $conexao->close();
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<style>
    body{
        margin: 0%;
        background-color: #fff;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }
    
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
        background-color: #dfedf2;
        
    }

    @import url('https://fonts.googleapis.com/css2? family= Handjet:wght@300 & family= Playfair+Display:ital,wght@1,400;1,900 & family= Poppins:ital,wght@ 1.100 & family= Texto & family= Ysabeau+SC:wght@600 & display=swap');
    *{
        font-family: var(--bs-body-font-family) !important;
    }
    .cor{
        background-color:#008f8c;
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
    @keyframes slideIn {
    from {
        transform: translateX(10px); 
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
    }

    .contabox{
        border: 1px solid #2576A8;
        background-color: #008f8c;
        display: flex;
        flex-direction: column;
        height: fit-content;
        width: fit-content;
        box-sizing: border-box;
        margin: 10vh auto 10vh auto;
        border-radius: 7px;
        padding: 5vh 15% 5vh 15%;
    }

    .containerlabel{
        display: flex;
        flex-direction: column;
    }

    .containerlabel label{
        padding: 0vh 2vh 1vh 0vh;
    }

    .botaodados{
        background-color: #008f8c;
        color: white;
        margin: 5px;
        border: 1px solid white;
        border-radius: 12px;
    }

    .botaodados:hover{
        border: 1px solid #008f8c;
        background-color: #dfedf2;
        color: #008f8c;
        cursor: pointer;
        transition-duration: 0.5s;
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

    .titulo{
        margin: 2vh auto 2vh auto;
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

    <div class="titulo">
        <h2>Minha Conta</h2>
    </div>

    <form method="post" >
        <div class="contabox">
            <div class="containerdados">
                <h6>Nome: <?php echo $_SESSION['Nome']; ?></h6>
            </div>
            <div class="containerdados">
                <h6>Sobrenome: <?php echo $_SESSION['Sobrenome']; ?></h6>
            </div>
            <div class="containerdados">
                <h6>Email: <?php echo $_SESSION['Email']; ?></h6>
            </div>
            <div class="containerdados">
                <h6>Senha: <?php echo str_repeat('*', strlen($_SESSION['Senha'])); ?></h6>
            </div>

            <input class="botaodados" type="submit" name="editar" value="Editar">
            <input class="botaodados" type="submit" name="excluir" value="Excluir Conta">
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
            <a href="sobre.php" class="sobreBtn">Nossa missão</a>
            <a href="contato.php" class="sobreBtn">Contate-nos</a>
            <a href="faq.php" class="sobreBtn">FAQ</a>
        </div>
    </footer>
</body>
</html>