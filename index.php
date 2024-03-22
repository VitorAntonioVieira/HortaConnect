<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Horta Connect</title>
</head>

<body>
    <nav>
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
                    <a href="./crud/loginnovo.php"><button id="login">Login</button></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide">
                <img class="imagem1" src="src/general/imagem1 (2).jpg" alt="Imagem de uma horta">
            </li>
        </ul>
    </div>
    <div class="display">
        <div class="primeiro">
            <img id="teste-fundo" src="./src/general/img-fundo.png" />
            <div id="container">
                <div class="box-info">
                    <p id="informa">Informações</p>
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
                <div class="box-info">
                    <p id="informa">Posso ajudar?</p>
                    <div div="guia">
                        <p id="selecionar">Selecione as informações</p>
                        <form>
                            <input type="text" placeholder="Tipo de solo" name="solo" />
                            <input type="text" placeholder="Cultura" name="cultura" />
                            <input type="text" placeholder="Pragas" name="pragas" />
                        </form>
                        <button class="botao-form transitionScale" type="submit">Pesquisar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="info-text">
        <h2>Bem vindos ao <span id="cor">HORTA CONNECT</span></h2>
        <p id="informacao-horta">Somos um projeto criado para ajudar produtores rurais, com o objetivo de maximizar o
            uso da tecnologia nas
            produções, auxiliando no impacto econômico e social, de modo que não haja impacto no meio ambiente. </p>
    </div>
    <div class="img-fundo2">
        <img id="teste-fundo2" src="./src/general/img-fundo2.png" />
        <div class="imagens2">
            <div class="">
                <span id="icone" class="material-symbols-outlined">
                    download
                </span>
                <p id="baixar">Baixe nosso app</p>
                <p id="baixar-info">Baixe o nosso App para ver as<br> novidades, e o mercado de
                    produtos!</p>
            </div>
            <div class="icone2">
                <a href="faleconosco.php">
                    <span id="icone" class="material-symbols-outlined">
                        info
                    </span></a>
                <p id="baixar">Solicitar Assistência</p>
                <p id="baixar-info">Precisa de alguma assistência <br>para os produtos Horta Connect? Nossa
                    equipe<br> está a disposição!</p>
            </div>
            <div class="icone3">
                <a href="sobrenos.php">
                    <span id="icone" class="material-symbols-outlined">
                        person
                    </span></a>
                <p id="baixar">Quem Somos</p>
                <p id="baixar-info"> Buscamos liderar a transformação digital<br> do agronegócio, por meio
                    de soluções <br>tecnológicas.</p>
            </div>
        </div>
    </div>
    <footer>
        <img id="logo-footer" src="./src/general/header-logo.png">
        <p>Av. Monsenhor Theodomiro Lobo, 100 - Parque Res. Maria Elmira,<br> Caçapava - SP</p>
        <br>
        <p>Email: hortalize.2024@gmail.com</p>
        <p>Telefone: (12) 3653-1943</p>
        <br>
        <p>Siga nossas redes sociais!</p>
        <ul id="ul">
          <img id="icone3" src="./src/icone/twitter.png">
          <img id="icone3" src="./src/icone/instagram.png">
        </ul>
    </footer>
</body>

</html>