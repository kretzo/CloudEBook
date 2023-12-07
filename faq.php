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
    <title>Perguntas frequentes</title>
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
</style>

<body >
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
        <h2>Perguntas frequentes</h2>
    </div>

    <div class="corpo">
        <label for="q1"><strong>Lorem ipsum dolor sit amet?</strong></label>
        <p id="q1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <br>
        <label for="q2"><strong>Vitae nunc sed velit dignissim sodales ut eu sem?</strong></label>
        <p id="q2">Vitae nunc sed velit dignissim sodales ut eu sem. Duis ultricies lacus sed turpis. Morbi blandit cursus risus at. Enim sit amet venenatis urna cursus eget nunc. Facilisis magna etiam tempor orci eu.</p>
        <br>
        <label for="q3"><strong>Viverra nam libero justo laoreet sit amet?</strong></label>
        <p id="q3">Viverra nam libero justo laoreet sit amet. Est ultricies integer quis auctor elit sed vulputate mi sit. </p>
        <br>
        <label for="q4"><strong>Odio ut enim blandit volutpat?</strong></label>
        <p id="q4">Odio ut enim blandit volutpat. Montes nascetur ridiculus mus mauris. Consectetur lorem donec massa sapien faucibus et molestie ac. Libero volutpat sed cras ornare arcu. Risus at ultrices mi tempus imperdiet nulla malesuada pellentesque.</p>
        <br>
        <label for="q5"><strong>Ac turpis egestas integer eget aliquet nibh?</strong></label>
        <p>Ac turpis egestas integer eget aliquet nibh. Elit duis tristique sollicitudin nibh sit amet commodo nulla facilisi. Nullam vehicula ipsum a arcu cursus vitae.</p>
    </div>

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