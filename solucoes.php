<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="StyleSheet" href="css/soluções.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Soluções tecnologicas</title>
</head>

<body>
    <header>
        <div class="container">
            <nav class="nav">
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <div class="info">
                    <div class="logo-nav">
                        <img id="logo-nav" src="src/general/header-logo.png">
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
                        <div id="botao">
                            <a href="loginnovo.php"><button id="login">Login</button></a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <h1>Soluções Tecnológicas</h1>
    <p class="subtitulo">Irrigação Inteligente</p>
    <hr id="hr2" />
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
                        <p>A cisterna é um reservatório que armazena uma quantidade moderada de água e é frequentemente
                            utilizada em hortas de tamanho intermediário, geralmente até 150 metros de comprimento.</p>
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