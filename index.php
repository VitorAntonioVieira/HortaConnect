<?php
include 'crud/conexao.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $observacao = $_POST["mensagem"];

    $sql = "INSERT INTO faleconosco (nomecompleto, email, observacao) VALUES ('$nome', '$email', '$observacao')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Erro ao inserir notas: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <link rel="shortcut icon" type="imagex/png" href="./src/icone/logo-icon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Horta Connect</title>
</head>

<body>
    <nav class="header">
        <div class="info">
            <div class="logo-nav-box hideOnMobile">
                <img id="logo-nav" src="src/general/header-logo.svg">
            </div>
            <div class="nav-wrap">
                <ul class="menu">
                    <li class="hideOnMobile"><a href="index.php">Página Inicial</a></li>
                    <li class="hideOnMobile"><a href="sobrenos.php">Sobre nós</a></li>
                    <li class="hideOnMobile"><a href="solucoes.php">Soluções Tecnológicas</a></li>
                    <li class="hideOnMobile"><a href="#f-form">Contato</a></li>
                    <li class="menu-button"><a href="#">
                            <span class="material-symbols-outlined">
                                menu
                            </span>
                        </a></li>
                </ul>
                <?php
                if (isset($_SESSION['usuario_logado'])) {
                    $nome = explode(" ", $_SESSION['usuario_logado']);
                    echo '<div style="display: flex; align-items: center;"><span style="font-size: 32px; margin-right: -10px" class="material-symbols-outlined">
                    account_circle
                    </span><label for="logout" class="menu">Bem vindo, ' . $nome[0] . '</label>
                    <a href="./crud/logout.php"><button class="transitionScale login-btn">Sair</button></a>
                    </div>';
                } else {
                    echo '<a href="./loginnovo.php"><button class="transitionScale login-btn">Entrar</button></a>';
                }
                ?>
            </div>
            <ul class="sidebar">
                <li id="close-btn" style="align-self: flex-end; margin-bottom: 20px"><a href="#"><span
                            class="material-symbols-outlined" style="width: 32px; color: black">close</span></a></li>
                <li class="menu-option"><a href="index.php">Página Inicial</a></li>
                <li class="menu-option"><a href="sobrenos.php">Sobre Nós</a></li>
                <li class="menu-option"><a href="solucoes.php">Soluções Tecnológicas</a></li>
                <li class="menu-option"><a href="#f-form">Contato</a></li>
            </ul>
        </div>
    </nav>

    <section class="ondas-box">
        <div class="content">
            <div class="content-block">
                <img src="./src/general/logo.svg" alt="Logo HortaConnect" class="logo panel hidden-v" id="panel-img">
                <div class="text-block">
                    <h1 class="panel" id="panel-title">HortaConnect</h1>
                    <text class="panel" id="panel-text">"Transformando sementes de ideias, em colheitas de
                        sucesso”.
                    </text>
                </div>
            </div>
            <div class="content-block flex">
                <div class="floating" id="panel-img1">
                    <img src="" alt="">
                </div>
                <div class="floating" id="panel-img2">
                    <img src="" alt="">
                </div>
                <div class="floating" id="panel-img3">
                    <img src="" alt="">
                </div>
            </div>
        </div>
        <div class="onda" id="onda1"></div>
        <div class="onda" id="onda2"></div>
        <div class="onda" id="onda3"></div>
        <div class="onda" id="onda4"></div>
    </section>
    <section class="display">
        <div class="container">
            <div class="box-info hidden">
                <h2 class="box-title">Serviços</h2>
                <div class="guia">
                    <p class="box-index">Guia do Agricultor</p>
                    <p class="box-desc">Tire suas dúvidas em nosso guia com informações apuradas.
                    </p>
                </div>
                <div class="guia">
                    <p class="box-index">Soluções Tecnológicas</p>
                    <p class="box-desc">Entregamos inovação e precisão. Você produz mais e desperdiça menos.
                    </p>
                </div>
                <div class="guia">
                    <p class="box-index">Mercado interno</p>
                    <p class="box-desc">Alcance a sua comunidade local, proporcionando uma alimentação saudável e
                        sincera.
                    </p>
                </div>
            </div>
            <div class="box-info hidden">
                <script src="./js/chat.js" defer></script>
                <h2 class="box-title">Posso ajudar?</h2>
                <div class="guia">
                    <p class="box-sub">Tire suas dúvidas!</p><br>
                    <textarea class="box-input" id="inputQuestion" placeholder="Pergunte algo aqui!"></textarea>
                    <textarea class="box-input" id="result" rows="10" disabled placeholder="Resposta da sua pergunta"
                        style="height: 20%;"></textarea>
                    <button id="searchButton" class="botao-form transitionScale" type="button">Pesquisar</button>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="content-block hidden">
            <h2 class="content-title">Conheça o <strong id="strong">HortaConnect</strong></h2>
            <p class="content-text">Somos um projeto criado para ajudar produtores rurais, com o objetivo de maximizar
                o
                uso da tecnologia nas
                produções, auxiliando no impacto econômico e social, de modo que não haja impacto no meio ambiente. </p>
        </div>
        <div class="content-block hidden-v center">
            <iframe src="https://drive.google.com/file/d/1Zl40lCAtIgm-Rddwf3p0cz9rpNskzOWi/preview" width="auto"
                height="auto" allow="autoplay"></iframe>
        </div>
    </section>
    <section class="content-t-grid hidden">
        <div class="content-box center">
            <span class="material-symbols-outlined content-icon" id="icon1">
                more_time
            </span>
            <h2 class="box-title">
                +Praticidade
            </h2>
            <p class="box-text">Nosso serviços otimizam o dia a dia do pequeno produtor</p>
        </div>
        <div class="content-box center">
            <span class="material-symbols-outlined content-icon" id="icon2">
                savings
            </span>
            <h2 class="box-title">
                +Economia
            </h2>
            <p class="box-text">Oferecemos preços acessíveis para alavancar seu negócio</p>
        </div>
        <div class="content-box center">
            <span class="material-symbols-outlined content-icon" id="icon3">
                contact_support
            </span>
            <h2 class="box-title center">
                +Suporte
            </h2>
            <p class="box-text center">Nosso atendimento resolve seu problema em até 1 dia útil</p>
        </div>
    </section>
    <a href="solucoes.php" class="m-height hidden center" style="text-decoration: none;">
        <input class="botao-form transitionScale" type="button" value="Confira nossos produtos">
    </a>
    <div class="mockup-container hidden">
        <img id="app-logo" src="./src/general/app-logo.webp" alt="Logo Aplicativo HortaConnect">
        <section class="content" style="padding-top: 0">
            <div class="content-block center">
                <img id="mockup" src="./src/general/mockup-app.jpg"
                    alt="Imagem de celular com o Aplicativo HortaConnect">
            </div>
            <div class="content-block" id="mockup-content">
                <h2 class="content-title">Baixe nosso <strong id="strong">aplicativo</strong>!</h2>
                <p class="content-text">Tenha acesso à todas funcionalidades e serviços da HortaConnect.</p>
                <div class="content" id="mockup-badges">
                    <div class="content-block ">
                        <img class="badge" src="./src/general/gplay-badge.png" alt="Baixe na GooglePlay Store">
                    </div>
                    <div class="content-block ">
                        <img class="badge" src="./src/general/appstr-badge.webp" alt="Baixe na App Store">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <div class="f-container">
            <div class="f-content">
                <div class="f-element">
                    <div class="f-grid">
                        <div class="f-box">
                            <img id="f-logo" src="./src/general/header-logo.webp" alt="">
                        </div>
                        <div class="f-box" style="gap: 5em">
                            <div class="f-wrap">
                                <img class="wrap-icon" src="./src/general/location.svg">
                                <p class="wrap-text">Av. Monsenhor Theodomiro Lobo, 100 - Parque Res. Maria Elmira,
                                    Caçapava - SP</p>
                            </div>
                            <div class="f-wrap">
                                <img class="wrap-icon" src="./src/general/call.svg">
                                <p class="wrap-text">(12) 99999-9999</p>
                            </div>
                            <div class="f-wrap">
                                <img class="wrap-icon" src="./src/general/mail.svg">
                                <p class="wrap-text">hortaconnect.2024@gmail.com</p>
                            </div>
                        </div>
                        <div class="f-box" style="gap: 2em; align-items: center">
                            <div class="f-wrap">
                                <p class="wrap-text" style="text-align: center"><strong>@hortaconnect</strong></p>
                            </div>
                            <div class="f-sub">
                                <a href="https://instagram.com/hortaconnect" class="f-wrap"
                                    href="https://www.instagram.com/hortaConnect/">
                                    <img class="wrap-icon" src="./src/icone/instagram.webp" alt="Instagram">
                                </a>
                                <a href="https://twitter.com/hortaconnect" class="f-wrap"
                                    href="https://twitter.com/hortaConnect">
                                    <img class="wrap-icon" src="./src/icone/twitter.webp" alt="Twitter">
                                </a>
                            </div>

                        </div>
                        <div class="f-box" id="frm-cont">
                            <h3 class="box-title" id="f-form">Entre em contato</h3>
                            <form action="#" method="post"
                                style="display:flex; justify-content:center; flex-direction:column; align-items:center; width:100%">
                                <input class="frm-input" type="text" id="nome" name="nome" placeholder="Nome" required>
                                <input class="frm-input" type="email" id="email" name="email" placeholder="Email"
                                    required>
                                <input class="frm-input" id="mensagem" name="mensagem" style="height: 10vh;"
                                    placeholder="Digite sua mensagem..." required></input>
                                <button type="submit" class="botao-form transitionScale">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="f-element" style="display:flex; flex-direction:column;">
                    <div class="f-divisor"></div>
                    <p class="content-text" style="color:#ffffff">Tech Motion 2024 - SESISENAI SP</p>
                </div>
            </div>
        </div>
        </f>
        <script src="./js/main.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>