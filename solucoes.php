<?php
session_start();
include './crud/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="StyleSheet" href="css/soluções.css">
    <link rel="shortcut icon" type="imagex/png" href="./src/icone/logo-icon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Soluções tecnologicas</title>
</head>

<body>
    <!-- Navbar -->
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
                            <a class="nav-link" href="#f-form">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a href="./loginnovo.php"><button class="transitionScale login-btn">Login</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <nav class="header">
        <div class="info">
            <div class="logo-nav-box">
                <img id="logo-nav" src="src/general/header-logo.svg">
            </div>
            <div class="nav-wrap">
                <ul class="menu">
                    <li><a href="index.php">Página Inicial</a></li>
                    <li><a href="sobrenos.php">Sobre nós</a></li>
                    <li><a href="solucoes.php">Soluções Tecnológicas</a></li>
                    <li><a href="#f-form">Contato</a></li>
                </ul>
                <a href="./loginnovo.php"><button class="transitionScale login-btn">Login</button></a>
            </div>
        </div>
    </nav>
    
    <h1>Soluções Tecnológicas</h1>
    <p class="subtitulo">Irrigação Inteligente</p>
    <!-- <div class="hr-container">
    <h3 style="font-size: 40px; color: #3f753a; text-align: center; margin-top: 30px; margin-bottom: 30px; opacity: 0; animation: fadeIn 1s ease forwards; display: block; width: 100%;">Irrigação Tecnológica</h3>
        <hr id="hr2"> -->
    </div>

    <div class="container">
        <div class="ume">
            <?php
            $sql = "SELECT * FROM irrigador";
            $resultado = $conn->query($sql);
            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    // Incrementing modal ID
                    $modal_id = $row['id_irrigador'];
                    echo "<div class='solução'>";
                    echo "<div class='img-sensor'>";
                    echo "<img id='img-sensor' src='" . $row['foto'] . "'>";
                    echo "</div>";
                    echo "<div id='informação'>";
                    echo "<h3>" . $row['nome'] . "</h3> <br>";
                    echo "<p> R$ " . $row['valor'] . ",00</p> ";
                    echo "<button id='openModal{$modal_id}Btn' class='botao-form transitionScale'>Saiba Mais</button><br>";
                    echo "</div>";
                    echo "<div id='myModal{$modal_id}' class='modal'>";
                    echo "<div class='modal-content'>";
                    echo "<span class='close' onclick='fechar()' id='closeModal{$modal_id}'>&times;</span>";
                    echo "<img id='img-modal' src='src/general/cisterna-pequena.jpg'>";
                    echo "<div id='alinhar'>";
                    echo "<h2></h2>";
                    echo "<h3 class='titulo-modal'>" . $row['nome'] . "</h3> <br>";
                    echo "<p class='descricao-modal'> ". $row['descricao'] . "</p>";
                    echo "<h4 class='valor-modal'>R$ " . $row['valor'] . ",00</h4>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            }
            ?>
        </div>
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
                                <a class="f-wrap" href="https://www.instagram.com/hortaConnect/">
                                    <img class="wrap-icon" src="./src/icone/instagram.webp" alt="Instagram">
                                </a>
                                <a class="f-wrap" href="https://twitter.com/hortaConnect">
                                    <img class="wrap-icon" src="./src/icone/twitter.webp" alt="Twitter">
                                </a>
                            </div>

                        </div>
                        <div class="f-box" id="frm-cont">
                            <h3 class="box-title" id="f-form">Entre em contato</h3>
                            <form action="/enviar" method="post"
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
    </footer>

    <!-- JavaScript -->
    <script src="./js/script.js"></script>
</body>

</html>