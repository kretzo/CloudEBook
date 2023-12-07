<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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

    .boxform {
    background-color: #008f8c;
    display: flex;
    justify-content: center;
    flex-direction: column;
    height: 475px;
    width: 450px;
    margin-top: 80px;
    box-sizing: border-box;
    border-radius: 30px; 
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    animation: slideIn 0.8s ease forwards;
   }

    .cadastro{
        font-family: 'Tahoma';
        margin-bottom: 5px;
        width: fit-content;
        margin-left: auto;
        margin-right: auto;
        color: #fff;
        display: flex;
        border-radius: 5px;
    }

    label{
        font-family: 'Tahoma';
        display: flex;
        justify-content:center;
        margin: 5px;
        color: #fff;
    }

    .botao{
        background-color:#008f8c;
        color: white;
        border: 1px solid white;
        border-radius: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .botao:hover{
        border: 1px solid #200645;
        background-color: #dfedf2;
        color: #200645;
        cursor: pointer;
        transition-duration: 0.5s;
    }

    .cadastroExcecao{
        font-size: small;
        display: flex;
        justify-content: center;
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
    .content {
    width: fit-content;
    display: flex;
    align-items: center;
    justify-content: space-between;
    transform: translate(15px, -10px);
    transition-duration: 0.5s;
}

.text {
    color: #182424;
    font-size: 30px;
    display: flex;
    flex-direction: column;
    transform: translate(20px, -10px);
    border-radius: 20px;
}

.text h3 {
    font-size: 3.5em; 
    font-weight: 950;
    display: flex;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4); 
    
}

.text h3 span {
    font-size: 1.0em;
    color: #040F1A;
    height: 20px;
}

.text p {
    font-size: 20px;
    height: auto;
    color: #040F1A;
    transform: translate(30px, -10px);
    letter-spacing: 2px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
}

main{
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    padding: 30px;
    flex-wrap: wrap;
    row-gap: 10px;
}
.left-img {
    max-width: 200%;
    height: auto;
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
    <main>
        <div class="content" style="text-align: center;">
            <div class="text">
                <h3>CloudEBook</h3>
                <p>Sua Nova Biblioteca Digital</p>
                <img src="Imagens/Learning.gif" clas="left-img" alt="animacao" width="650px" height="450px" style="margin-left: 20px;">
            </div>
        </div> 

        <div>
            <form class="boxform" method="post" action="processoCadastro.php">
                <div class="cadastro" style="color: #fff; " >
                    <h3>Crie Sua Conta Já</h3>
                </div>
                <label for="nomeCad">Nome</label>
                <div class="cadastro">
                    <input type="text" id="nomeCad" name="nomeCad" style="border-radius: 15px;">
                </div>
                <label for="sobrenomeCad">Sobrenome</label>
                <div class="cadastro">
                    <input type="text" id="sobrenomeCad" name="sobrenomeCad" style="border-radius: 15px;">
                </div>
            <label for="emailCad">Email</label>
                <div class="cadastro">
                    <input type="email" id="emailCad" name="emailCad" style="border-radius: 15px;">
                </div>
                <label for="senhaCad">Senha</label>
                <div class="cadastro">
                    <input type="password" id="senhaCad" name="senhaCad" style="border-radius: 15px;">
                </div>
                <label for="senhaCad2">Confirme sua senha</label>
                <div class="cadastro">
                    <input type="password" id="senhaCad2" name="senhaCad2" style="border-radius: 15px;">
                </div>
                <div class="cadastro">
                    <input type="submit" class="botao" value="Cadastrar">
                </div>
                <div class="cadastroExcecao">
                    <a href="Login.php" style="color: #dfedf2">Já tem conta? Faça Login</a>
                </div>
            </form>
        </div>
    </main>

    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" color="white" fill="currentColor" class="bi bi-arrow-up-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/>
          </svg>
      </a>
    <script src="main.js"></script>

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