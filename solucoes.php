<?php
session_start();
include './crud/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="StyleSheet" href="css/solucoes.css">
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
    <nav class="navbar fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src=".src/general/header-logo.svg" alt=""></a>
            <!-- Navbar content -->
        </div>
    </nav>

    <!-- Header -->
    <nav class="header">
        <div class="info">
            <div class="logo-nav-box">
                <img id="logo-nav" src="src/general/header-logo.svg">
            </div>
            <div class="nav-wrap">
                <!-- Header content -->
            </div>
        </div>
    </nav>

    <h1>Soluções Tecnológicas</h1>
    <p class="subtitulo">Irrigação Inteligente</p>
    <hr id="hr2" />
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
                    echo "<h3>" . $row['nome'] . "</h3>";
                    echo "<p>" . $row['valor'] . "</p>";
                    echo "<button id='openModal{$modal_id}Btn' class='botao-form transitionScale'>Saiba Mais</button>";
                    echo "</div>";
                    echo "<div id='myModal{$modal_id}' class='modal'>";
                    echo "<div class='modal-content'>";
                    echo "<span class='close' onclick='fechar()' id='closeModal{$modal_id}'>&times;</span>";
                    echo "<img id='img-modal' src='src/general/cisterna-pequena.jpg'>";
                    echo "<div id='alinhar'>";
                    echo "<h2></h2>";
                    echo "<p>" . $row['descricao'] . "</p>";
                    echo "<h4>" . $row['valor'] . "</h4>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            }
            ?>
        </div>
    </div>

    </div>
    </div>

    <!-- JavaScript -->
    <script src="./js/script.js"></script>
</body>

</html>