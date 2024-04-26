<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="StyleSheet" href="css/soluções.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>Soluções tecnologicas</title>
</head>

<body>
    <!-- Header Start -->
    <nav class="header">
        <div class="info">
            <div class="logo-nav-box">
                <img id="logo-nav" src="./src/general/header-logo.svg">
            </div>
            <div class="nav-wrap">
                <ul class="menu">
                    <li><a href="index.php">Página Inicial</a></li>
                    <li><a href="sobrenos.php">Sobre nós</a></li>
                    <li><a href="solucoes.php">Soluções</a></li>
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
    <nav class="navbar fixed-top" style="display:none">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src=".src/general/header-logo.svg" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src=".src/general/header-logo.svg"
                            alt=""></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Página inicial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./sobrenos.php">Sobre nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./solucoes.php">Soluções tecnológicas</a>
                        </li>
                        <li class="nav-item">
                            <a href="./loginnovo.php"><button class="transitionScale login-btn">Login</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- <-- Header Start-->
    <h1>Soluções Tecnológicas</h1>
    <div class="titulo-container">
        <hr class="separador-esquerda">
        <p class="subtitulo">Irrigação Inteligente</p>
        <hr class="separador-direita">
    </div>

    <div class="container">
        <div class="ume">
            <div class="solução">
                <div class="img-sensor">
                    <img id="img-sensor" src="./src/general/sensor.jpg">
                </div>
                <div id="informação">
                    <h3>Básico</h3>
                    <p>R$ 7.500,00</p>
                    <button id="openModal1Btn" class="botao-form transitionScale">Saiba Mais</button>
                </div>
                <div id="myModal1" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="fechar()" id="closeModal1">&times;</span>
                        <img id="img-modal" src="src/general/cisterna-pequena.jpg">
                        <div id="alinhar">
                            <h2>Sistema de irrigação basico</h2>
                            <p>A cisterna armazena uma pequena quantidade de água e é utilizada em hortas menores com
                                até 40
                                metros de comprimento.</p>
                            <h4>R$ 7.500,00</h4>
                        </div>
                    </div>
                </div>

            </div>
            <div class="solução">
                <div class="img-sensor">
                    <img id="img-sensor" src="./src/general/sensor.jpg">
                </div>
                <div id="informação">
                    <h3>intermediário</h3>
                    <p>R$ 10.500,00</p>
                    <button id="openModal2Btn" class="botao-form transitionScale">Saiba Mais</button>
                </div>
                <div id="myModal2" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="fechar()" id="closeModal2">&times;</span>
                        <img id="img-modal" src="src/general/cisterna-pequena.jpg">
                        <div id="alinhar">
                            <h2>Sistema de irrigação intermediário</h2>
                            <p>A cisterna é um reservatório que armazena uma quantidade moderada de água e é
                                frequentemente
                                utilizada em hortas de tamanho intermediário, geralmente até 150 metros de comprimento.
                            </p>
                            <h4>R$ 10.500,00</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="solução">
                <div class="img-sensor">
                    <img id="img-sensor" src="./src/general/sensor.jpg">
                </div>
                <div id="informação">
                    <h3>Avançado</h3>
                    <p>R$ 10.500,00</p>
                    <button id="openModal3Btn" class="botao-form transitionScale">Saiba Mais</button>
                </div>
                <div id="myModal3" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="fechar()" id="closeModal3">&times;</span>
                        <img id="img-modal" src="src/general/cisterna-pequena.jpg">
                        <div id="alinhar">
                            <h2>Sistema de irrigação avançado</h2>
                            <p>A cisterna é um reservatório que armazena uma quantidade moderada de água e é
                                frequentemente
                                utilizada em hortas de tamanho intermediário, geralmente até 150 metros de comprimento.
                            </p>
                            <h4>R$ 10.500,00</h4>
                        </div>
                    </div>
                </div>
                <script src="./js/script.js"></script>
            </div>
        </div>

    </div>

</body>

</html>