<?php
// include 'crud/conexao.php';
// session_start();

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $nome = $_POST["nome"];
//     $cidade = $_POST["cidade"];
//     $telefone = $_POST["telefone"];
//     $email = $_POST["email"];
//     $observacao = $_POST["observacao"];

//     $sql = "INSERT INTO faleconosco (nomecompleto, cidade, telefone, email, observacao) VALUES ('$nome', '$cidade', '$telefone', '$email', '$observacao')";

//     if ($conn->query($sql) === TRUE) {
//         header("Location: agradecimento.php");
//     } else {
//         echo "Erro ao inserir notas: " . $conn->error;
//     }
// }
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
    <figure id="container">
        <img id="foto" src="src/colheita.jpg" />
        <figcaption>Assistência</figcaption>
    </figure>
    <div class="content">
        <div class="infos">
            <p id="problemas">Está com problemas? Entre em contato conosco!</p>
            <p id="problemas2">Para nós, a satisfação do cliente é essencial. Por esta razão garantimos um serviço de
                assistência técnica eficiente. Aqui você pode resolver seus problemas, e tirar dúvidas sobre os produtos
                da
                Horta Connect!
            </p>
        </div>
        <form action="" method="post">
            <div class="primeiro">
                <div class="display">
                    <div class="teste">
                        <label for="nomeCompleto">Nome completo:</label>
                        <input type="text" placeholder="Nome completo" name="nome" required>
                    </div>
                    <div class="teste">
                        <label id="cdd" for="cidade">Cidade:</label>
                        <input id="cdds" type="text" placeholder="Cidade" name="cidade" required>
                    </div>
                </div>
            </div>
            <div class="primeiro">
                <div class="display">
                    <div class="teste">
                        <label for="telefone">Número de Telefone:</label>
                        <input type="tel" placeholder="Número de telefone" name="telefone" required>
                    </div>
                    <div class="teste">
                        <label for="email">Email:</label>
                        <input type="email" placeholder="Email" name="email" required>
                    </div>
                </div>
                <div class="mensagem-box">
                    <div class="mensagem">
                        <label for="observação">Mensagem:</label>
                        <textarea id="mensagem" type="text" placeholder="Mensagem" name="observacao"
                            required></textarea>
                    </div>
                </div>
                <p id="politica">Politicas de privacidade</p>
                <div class="check">
                    <input type="checkbox" id="subscribeNews" name="subscribe" value="newsletter" />
                    <label id="li" for="subscribeNews"> Eu li e aceito </label>
                </div>
                <button id="form-btn" type="submit">Enviar</button>
            </div>
            <div>
            </div>
    </form>
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