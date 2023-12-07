<?php
    if(!isset($_SESSION)) {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contate-nos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</head>

<style>
    .cabecalho {
        background-color: #008f8c;
        box-shadow: 0px 1px 5px;
        width: auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .cabecalho .menu {
        width: 40px;
        height: 40px;
        margin: 0px;
        display: inline-flex;
        margin: 20px;
        background-color: #fff;

    }

    @import url('https://fonts.googleapis.com/css2?family=Martian+Mono:wght@700&display=swap');

    * {
        font-family: var(--bs-body-font-family) !important;
    }

    .cor {
        background-color: #008f8c;
        border: none;
        height: fit-content;
    }

    .cabecalho .logo {
        width: 3000px;
        display: flex;
        justify-content: center;
    }

    .cabecalho .usuario {
        width: 50px;
        height: 50px;
        display: inline-flex;
        justify-content: center;
        margin: 15px;
    }

    .titulo {
        height: 120px;
        width: auto;
        font-family: 'Tahoma';
        display: flex;
        justify-content: center;
        align-items: center;
        letter-spacing: 5px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
        margin: 20px auto;
        margin-right: 70px;
    }



    .boxform {
        background-color: #008f8c;
        display: flex;
        justify-content: center;
        flex-direction: column;
        height: 475px;
        width: 450px;
        margin-left: 200px;
        margin-top: 80px;
        box-sizing: border-box;
        border-radius: 30px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        animation: slideIn 0.8s ease forwards;
    }



    label {
        font-family: 'Tahoma';
        display: flex;
        justify-content: center;
        margin: 5px;
        color: #ffff;
        font-size: 30px;
        margin-left: 10px;
    }

    .botao {
        background-color: #008f8c;
        color: white;
        margin: 5px;
        border: 1px solid white;
    }

    .botao:hover {
        border: 1px solid #008f8c;
        background-color: #dfedf2;
        color: #200645;
        cursor: pointer;
        transition-duration: 0.5s;
    }

    .rodape {
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
        border-top: 0.6px solid #151414;
    }

    .rodape .iconeFooter {
        height: auto;
        width: 15%;
        margin: 0.7%;
        display: flex;
        justify-content: left;
    }

    .rodape .copyright {
        width: 60%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
        color: white;
        font-family: 'Tahoma';
        font-size: small;
    }

    .rodape .listaInfo {
        height: auto;
        width: 25%;
        margin-right: 2%;
        display: flex;
        justify-content: right;
        flex-direction: row;
    }

    .sobreBtn {
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

    .sobreBtn:hover {
        cursor: pointer;
        color: #fff;
        background-color: #008f8c;
        transition-duration: 0.5s;
    }

    a:link {
        text-decoration: none;
    }

    .sobreBtn:hover {
        cursor: pointer;
    }

    body {
        margin: 0%;
        background-color: #fff;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .logo {
        display: flex;
        align-items: center;
        width: 400px;
        height: 80px;
    }

    form input {
        box-shadow: 1px 1px 1px;
        margin-left: 100px;
    }

    #logo {
        height: 100px;
    }

    .left-img {
        width: 100%;
        max-width: 550px;
        margin-bottom: -500px;
        margin-left: -500px;
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
    <div>
        <div class="titulo" style="display: flex; align-items: center; margin-left: 80px; margin-bottom: -50px;">
            <h2>Tem alguma Dúvida, Sugestão ou Reclamação? Envie-nos uma Mensagem!</h2>
            <img src="Imagens/Contact us (1).gif" class="left-img" alt="animacao" width="650px" height="450px">
        </div>
    </div>

    <form class="boxform" method="post" action="contato.php">
        <div class="contato" style="color:#ffff; margin-left: 180px;">
            <h3>Contato</h3>
        </div>
        <div class="contato">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" style="margin-left: 130px;">
        </div>
        <div class="contato">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" style="margin-left: 130px;">
        </div>
        <div class="contato">
            <label for="texto">Mensagem</label>
            <textarea name="texto" id="texto" style="margin-left: 140px;"></textarea>
        </div>
        <div class="contato">
            <input class="botao" type="submit" value="Enviar" style="margin-left: 180px;">
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