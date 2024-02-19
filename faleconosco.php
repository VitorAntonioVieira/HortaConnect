<?php
include 'crud/conexao.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cidade = $_POST["cidade"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $observacao = $_POST["observacao"];

    $sql = "INSERT INTO faleconosco (nomecompleto, cidade, telefone, email, observacao) VALUES ('$nome', '$cidade', '$telefone', '$email', '$observacao')";

    if ($conn->query($sql) === TRUE) {
        header("Location: agradecimento.php");
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
    <link rel="stylesheet" href="./css/fale-conosco.css" />
    <title>Fale Conosco</title>
</head>

<body>
    <nav>
        <div class="info">
            <div class="logo-nav">
                <img id="logo-nav" src="src/header-logo.png">
            </div>
            <ul class="menu">
                <li><a href="#">Informações</a>
                    <ul>
                        <li><a href="#">Sobre nós</a></li>
                        <li><a href="faleconosco.php">Contato</a></li>
                        <li><a href="#">Geral</a></li>
                    </ul>
                </li>
            </ul>
            <div id="botao">
                <a href="login.php"><button id="login">Log in</button></a>
            </div>
        </div>
    </nav>
    <figure id="container">
        <img id="foto" src="src/colheita.jpg" />
        <figcaption>Assitência</figcaption>
    </figure>
    <div class="infomações">
        <p id="problemas">Está com problemas? Entre em contato conosco!</p>
        <p id="problemas2">Para nós, a satisfação do cliente é essencial. Por esta razão garantimos um serviço de
            assistência técnica eficiente. Aqui você pode resolver seus problemas, e tirar dúvidas sobre os produtos da
            Horta Connect!</p>
    </div>
    <form action="" method="post">
        <div class="primeiro">
            <label for="nomeCompleto">Nome completo:
                <br>
                <input type="text" name="nome" required>
            </label>

            <label for="cidade">Cidade:
                <br>
                <input type="text" name="cidade" required>
            </label>

        </div>
        <div class="segundo">
            <label for="telefone">Número de Telefone:
                <br>
                <input type="tel" name="telefone" required>
            </label>

            <label for="email">email:
                <br>
                <input type="email" name="email" required>
            </label>

        </div>
        <label for="observação">mensagem:</label>
        <input type="text" name="observacao" required>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>