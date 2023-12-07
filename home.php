<?php
    if(!isset($_SESSION)) {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloudEBook - A sua biblioteca digital</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<style>
        
    body{
        margin: 0%;
        background: #fff;
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

    .boasvindas {
        text-align: center;
        margin-top: 100px;
        transform: translateY(-30px);
    }

    .boasvindas h2 {
        letter-spacing: 2px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
        color: #008f8c;
    }

    .novidades {
        width: 140vh;
        height: 60vh;
        margin: 0 auto 10px;
        text-align: center;
       }

    .novidades .slideImagens {
        position: relative;
        height: 60vh;
       }

    .novidades .slideImagens img {
        width: 100%;
        height: 60vh;
        position: absolute;
        left: 0;
        opacity: 0;
        transition: opacity 1s ease-in-out;
        border-radius: 15px;
        box-shadow: 0 4px 10px 0 #008f8c(0, 0, 0, 0.2);
    }

    .novidades .slideImagens img.shown {
        opacity: 1;
        transition: opacity 1s ease-in-out;
    }

    .prev:before {
        cursor: pointer;
        position: absolute;
        top: 45%;
        font-size: 60px;
        left: 0;
        content: "<";
        color: white;
    }

    .next:before {
        cursor: pointer;
        position: absolute;
        top: 45%;
        font-size: 60px;
        right: 0;
        content: ">";
        color: white;
    }
    
    .containerLivros {
        width: 80%;
        margin: 20px auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        transform: translateY(10px);
    }

    .containerLivros .livros {
        height: 200px;
        width: 150px;
        margin: 10px;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        border-radius: 20px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s ease-in-out;
        background-color: #dfedf2;
    }

    .containerLivros .livros img {
        width: 100%;
        height: 70%;
        object-fit: cover;
        transition: transform 0.3s ease-in-out;
    }

    .containerLivros .livros:hover {
        transform: scale(1.05);
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

    .sobreBtn:hover{
        cursor: pointer;
    }

    .logo{
        display: flex;
        align-items: center;
        width: 400px;
        height: 60px;
    }

    form  input{
        box-shadow: 1px 1px 1px;
    }

    #logo{
        height: 80px;
    }

    .to-top {
        background: #182424;
        position: fixed;
        bottom: 100px;
        right:30px;
        width:50px;
        height:50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size:32px;
        color:#1f1f1f;
        text-decoration: none;
        opacity:0;
        pointer-events: none;
        transition: all .4s;
    }

    .to-top.active {
        bottom:100px;
        pointer-events: auto;
        opacity:1;
        position: fixed;
    }

    .linkLivros a {
        color: #333;
        text-decoration: none;
        position: relative;
        display: inline-block;
        padding: 1px 10px;
        border: 2px solid #333;
        border-radius: 5px;
        transition: color 0.3s ease-in-out, background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
        font-family: Arial, sans-serif;
        font-size: 18px;
        font-weight: bold;
        bottom: -35px;
    }

    .linkLivros a:hover {
        color: #fff;
        background-color: #333;
        transform: translateY(-3px);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .linkLivros a::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, #008f8c, #2f4b4a);
        z-index: -1;
        border-radius: 5px;
        transition: opacity 0.3s ease-in-out;
        opacity: 0;
    }

    .linkLivros a:hover::before {
        opacity: 1;
    }

    .linkLivros u {
        text-decoration: none;
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

    <?php if(isset($_SESSION['Nome'])): ?>
        <div class="boasvindas">
            <h2>Bem-vindo(a) ao Cloud&Book, <?php echo $_SESSION['Nome']; ?>!</h2>
        </div>
    <?php else: ?>
        <div class="boasvindas">
            <h2>Bem-vindo ao CloudEBook!</h2>
        </div>
    <?php endif; ?>

    <div class="novidades">
        <div class="slideImagens">
            <img src="Imagens/Cloud&Book 3.gif" class="shown">
            <img src="Imagens/Cloud&Book.jpg">
            <img src="Imagens/Cloud&Book (1).gif" class="shown">
            <div class="slideBotao">
                <div class="prev"></div>
                <div class="next"></div>
            </div>
        </div>
    </div>

    <div class="containerLivros">
        <div class="livros" id="7" onclick="window.location='leitura.php?id=7';">
            <img src="Imagens/Capas/capa_os_lusiadas.jpg" alt="os_lusiadas">
            <label for="7">Os Lusíadas</label>
        </div>
        <div class="livros" id="5" onclick="window.location='leitura.php?id=5';">
            <img src="Imagens/Capas/capa_nove_noites.jpg" alt="nove_noites">
            <label for="5">Nove Noites</label>
        </div>
        <div class="livros" id="4" onclick="window.location='leitura.php?id=4';">
            <img src="Imagens/Capas/capa_noite_na_taverna.jpg" alt="noite_na_taverna">
            <label for="4">Noite na Taverna</label>
        </div>
        <div class="livros" id="1" onclick="window.location='leitura.php?id=1';">
            <img src="Imagens/Capas/capa_a_falencia.jpg" alt="noite_na_taverna">
            <label for="1">A Falência</label>
        </div>
    </div>

    <div class="linkLivros" style="text-align: center;">
        <a href="pagina_livros.php">
            <u>Mais livros</u>
        </a>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        Slider({
            images: '.slideImagens img',
            btnPrev: '.prev',
            btnNext: '.next',
            auto: false
        });
    });

    function Slider(obj) {
        var images = $(obj.images);
        var auto = obj.auto;
        var btnPrev = $(obj.btnPrev);
        var btnNext = $(obj.btnNext);
        var rate = obj.rate || 1000;
        var i = 0;

        $(images[0]).addClass('shown');

        function prev() {
            $(images[i]).removeClass('shown');
            i--;

            if (i < 0) {
                i = images.length - 1;
            }

            $(images[i]).addClass('shown');
        }

        function next() {
            $(images[i]).removeClass('shown');
            i++;

            if (i >= images.length) {
                i = 0;
            }

            $(images[i]).addClass('shown');
        }

        btnPrev.on('click', function () {
            prev();
        });

        btnNext.on('click', function () {
            next();
        });

        if (auto) {
            setInterval(next, rate);
        }
    }
</script>

</html>