<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/sobrenos.css" />
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

    <div class="container">
        <div class="display">
            <p id="sobrenos">Sobre nós</p>
            <p id="info"> Na interseção entre a inovação tecnológica e a agricultura responsável, nasce a
                HORTA CONNECT. Somos
                mais do que uma empresa, somos uma missão: ajudar produtores rurais a prosperar, impulsionando o uso
                inteligente da tecnologia em suas operações, enquanto preservamos e protegemos nosso meio ambiente.
            <p></p>
            <span id="text">Nosso Propósito:</span>
            <p id="info">
                Somos um projeto criado para ajudar produtores rurais, com o objetivo de maximizar o uso da tecnologia
                nas
                produções, auxiliando no impacto econômico e social, de modo que não haja impacto no meio ambiente.
                Reconhecemos o valor essencial da agricultura para a sociedade e para a economia, e acreditamos que é
                possível cultivar de maneira sustentável, sem comprometer o futuro das próximas gerações.</p>
        </div>
        <img id="imagem-exemplo" src="./src/general/logo-verde.png">
    </div>
    <span id="text">Como Funcionamos:</span>
    <p id="info2">
        Na HORTA CONNECT, combinamos expertise em tecnologia com profundo conhecimento agrícola.
        Desenvolvemos
        soluções inovadoras, desde sistemas de monitoramento de culturas até ferramentas de gestão de recursos
        naturais, todas projetadas para otimizar a produção agrícola enquanto minimizamos o impacto ambiental.
    </p>
    <hr id="hr" />
    <div class="integrantes">
        <p id="text-integrante">Colaboradores</p>
        <div class="img-integrantes">
            <div class="teste-img">
                <img id="alice" src="./src/integrantes/foto-alice.jpg">
                <div class="descricao">
                    <p class="nome">Alice de Lima</p>
                    <p class="funcao">Back-end e Segurança</p>
                </div>
            </div>
            <div class="teste-img">
                <img id="lana" src="./src/integrantes/foto-lana.jpg">
                <div class="descricao">
                    <p class="nome">Lana Araújo</p>
                    <p class="funcao">Design</p>
                </div>
            </div>
            <div class="teste-img">
                <img id="rafael" src="./src/integrantes/foto-rafael.jpg">
                <div class="descricao">
                    <p class="nome">Rafael Henrique</p>
                    <p class="funcao">Analista</p>
                </div>
            </div>
            <div class="teste-img">
                <img id="vitor" src="./src/integrantes/foto-vitor.jpg">
                <div class="descricao">
                    <p class="nome">Vitor Antonio</p>
                    <p class="funcao">Product owner</p>
                </div>
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
          <img id="icone" src="./src/icone/twitter.png">
          <img id="icone" src="./src/icone/instagram.png">
        </ul>
    </footer>
</body>

</html>