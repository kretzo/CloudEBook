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

<body >
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
            <a href="home.php"><img src="Imagens/cbc40fce71f045f6b812383fe5fe1742-removebg-preview.png" alt="" id="logo" height="120px"></a>
        </div>
        <div class="dropdown">
            <button class="cor" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="Imagens/procurar-unscreen.gif" alt="" width="50" height="48">
            </button>
            <ul class="dropdown-menu">
              <?php if(isset($_SESSION['Nome'])): ?>
                <li><a class="dropdown-item" href="minhaconta.php">👤 MINHA CONTA</a></li>
                <li><a class="dropdown-item" href="#">📚 BIBLIOTECA</a></li>
                <li><a class="dropdown-item" href="#">⭐ FAVORITOS</a></li>
                <li><a class="dropdown-item"  id="logoutLink" href="logout.php">↩️ SAIR</a></li>
              <?php else: ?>
                <li><a class="dropdown-item" href="login.html">↪️ FAZER LOGIN</a></li>
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
            <img src="Imagens/banner_apresentacao.jpg" class="shown" alt="banner_apresentacao.jpg">
            <img src="Imagens/img_2.jpg" alt="img_2.jpg">
            <img src="Imagens/img_3.jpg" alt="img_3.jpg">

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

    <footer class="rodape">
        <div class="iconeFooter">
            <img src="Imagens/livro-1--unscreen.gif" alt="" height="50px">
        </div>
        <div class="copyright"  style="color: rgb(18, 17, 17)">
            <p>CloudEBook — 2023 © Todos os direitos reservados</p>
        </div>
        <div class="listaInfo">
            <a href="sobre.html" class="sobreBtn">Nossa missão</a>
            <a href="contato.html" class="sobreBtn">Contate-nos</a>
            <a href="faq.html" class="sobreBtn">FAQ</a>
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

    document.getElementById('logoutLink').addEventListener('click', function(e){
    e.preventDefault();
    if (confirm("Tem certeza que deseja sair?")){
        window.location.href = 'logout.php';
    }
    });
</script>

</html>