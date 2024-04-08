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
            <div class="logo-nav-box">
                <img id="logo-nav" src="src/general/header-logo.svg">
            </div>
            <div class="nav-wrap">
                <ul class="menu">
                    <li><a href="index.php">Página Inicial</a></li>
                    <li><a href="sobrenos.php">Sobre nós</a></li>
                    <li><a href="faleconosco.php">Contato</a></li>
                    <li>
                        <ul class="submenu">
                            <li><a href="#">Soluções Tecnológicas</a></li>
                        </ul>
                    </li>
                </ul>
                <a href="./loginnovo.php"><button class="transitionScale login-btn">Login</button></a>
            </div>
        </div>
    </nav>

    <section class="ondas-box">
        <div class="content">
            <div class="content-block">
                <img src="./src/general/logo.svg" alt="Logo HortaConnect" class="logo panel hidden-v" id="panel-img">
                <div class="text-block">
                    <h1 class="panel" id="panel-title">HortaConnect</h1>
                    <text class="panel" id="panel-text">"Transformando sementes de ideias, em colheitas de
                        sucesso”</text>
                </div>
            </div>
            <div class="content-block">
                <img src="" alt="" class="floating-img" id="panel-img1">
                <img src="" alt="" class="floating-img" id="panel-img2">
                <img src="" alt="" class="floating-img" id="panel-img3">
            </div>
        </div>
        <div class="onda" id="onda1"></div>
        <div class="onda" id="onda2"></div>
        <div class="onda" id="onda3"></div>
        <div class="onda" id="onda4"></div>
    </section>
    <section class="display">
        <div id="container">
            <div class="box-info hidden">
                <h2 class="box-title">Serviços</h2>
                <div div="guia">
                    <p id="guia-agricultor">Guia do agricultor</p>
                    <p id="descricao">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div div="guia">
                    <p id="guia-agricultor">Soluções tecnologicas</p>
                    <p id="descricao">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div div="guia">
                    <p id="guia-agricultor">Mercado interno</p>
                    <p id="descricao">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
            </div>
            <div class="box-info hidden">
                <script src="./js/chat.js" defer></script>
                <h2 class="box-title">Posso ajudar?</h2>
                <div id="guia">
                    <p id="selecionar">Tire suas dúvidas!</p><br>
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
            <iframe class="content-video"
                src="https://drive.google.com/file/d/1bonlDVAs7FcrNGw47seMnX5RbKziu2ZW/preview" width="80%"
                height="273.49vh"></iframe>
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
    <a href="solucoes.php" class="hidden center" style="text-decoration: none; margin-top: -15vh"><input
            class="botao-form transitionScale" type="button" value="Confira nossos produtos"></a>
    <div class="hidden" style="padding-top: 5vh; padding-bottom: 15vh">
        <img id="app-logo" src="./src/general/app-logo.webp" alt="Logo Aplicativo HortaConnect">
        <section class="content" style="padding-top: 0">
            <div class="content-block center">
                <img id="mockup" src="./src/general/mockup-app.jpg"
                    alt="Imagem de celular com o Aplicativo HortaConnect">
            </div>
            <div class="content-block" style="padding-top: 10vh;">
                <h2 class="content-title">Baixe nosso <strong id="strong">aplicativo</strong>!</h2>
                <p class="content-text">Tenha acesso à todas funcionalidades e serviços da HortaConnect.</p>
                <div class="content" style="width: 100%; padding-left: 0;">
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
        <div class="footer-container">
            <div class="footer-content">
                <div class="footer-element">
                    <div class="footer-grid">
                        <div class="footer-box">
                            <img id="footer-logo" src="./src/general/header-logo.webp" alt="">
                        </div>
                        <div class="footer-box" style="gap: 5em">
                            <div class="footer-wrap">
                                <img class="wrap-icon" src="./src/general/location.svg">
                                <p class="wrap-text">Av. Monsenhor Theodomiro Lobo, 100 - Parque Res. Maria Elmira,
                                    Caçapava - SP</p>
                            </div>
                            <div class="footer-wrap">
                                <img class="wrap-icon" src="./src/general/call.svg">
                                <p class="wrap-text">(12) 99999-9999</p>
                            </div>
                            <div class="footer-wrap">
                                <img class="wrap-icon" src="./src/general/mail.svg">
                                <p class="wrap-text">hortaconnect.2024@gmail.com</p>
                            </div>
                        </div>
                        <div class="footer-box" style="gap: 2em; align-items: center">
                            <div class="footer-wrap">
                                <p class="wrap-text" style="text-align: center"><strong>@hortaconnect</strong></p>
                            </div>
                            <div class="footer-sub">
                                <a class="footer-wrap" style="">
                                    <img class="wrap-icon" src="./src/icone/instagram.webp">
                                </a>
                                <a class="footer-wrap" style="">
                                    <img class="wrap-icon" src="./src/icone/twitter.webp">
                                </a>
                            </div>
                        </div>
                        <div class="footer-box">
                            <form action="/enviar" method="post" style="display:flex; justify-content:center; flex-direction:column">
                                <input class="form-input" type="text" id="nome" name="nome" placeholder="Nome" required>
                                <input class="form-input" type="email" id="email" name="email" placeholder="Email" required>
                                <input class="form-input" id="mensagem" name="mensagem" style="height: 10vh;" placeholder="Digite sua mensagem..." required></input>
                                <button type="submit" class="botao-form transitionScale">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="footer-element" style="display:flex; flex-direction:column; align-items:center">
                    <div class="footer-divisor"></div>
                    <p class="content-text" style="color:#ffffff">Tech Motion 2024 - SESISENAI SP</p>
                </div>
            </div>
        </div>
        <!-- <img id="logo-footer" src="./src/general/header-logo.png">
        
        <br>
        <p>Email: hortalize.2024@gmail.com</p>
        <p>Telefone: (12) 3653-1943</p>
        <br>
        <p>Siga nossas redes sociais!</p>
        <ul id="ul">
            <img id="icone3" src="./src/icone/twitter.png">
            <img id="icone3" src="./src/icone/instagram.png">
        </ul> -->
    </footer>
    <script src="./js/main.js" defer></script>
</body>

</html>