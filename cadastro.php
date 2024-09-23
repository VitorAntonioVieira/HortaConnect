<?php
include "./crud/conexao.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nomeCompleto = $_POST['nome'];
    $email = $_POST['email'];
    $hashed_password = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $sql = "INSERT INTO usuarios (email, nomeCompleto, senha) VALUES (?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    $stmt->bind_param("sss", $email, $nomeCompleto, $hashed_password);
    $stmt->execute();
    header("Location: ./loginnovo.php");
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cadastro.css">
    <title>Cadastre-se</title>
</head>

<body>
    <a href="index.php" class="back-button">
        <img src="src/login/seta-esquerda.png" alt="Voltar" />
    </a>
    <div class="container">
        <div class="left">
            <form action="" method="POST" class="formLogin">
                <h1>Cadastre-se</h1>
                <p>Digite os seus dados de acesso nos campos abaixo.</p>
                <label for="nome">Nome Completo</label>
                <input name="nome" type="text" placeholder="Insira seu nome completo" required />
                <label for="email">E-mail</label>
                <input type="email" placeholder="Insira seu e-mail" required />
                <label for="senha">Senha</label>
                <input type="password" placeholder="Digite sua senha" name="senha" required />
                
                <div class="btn-container">
                    <input type="submit" value="Cadastre" class="btn" />
                </div>
                
                <p>Já tem acesso? <a href="loginnovo.php">Faça login</a></p>
            </form>
        </div>
        <div class="right">
            <div class="logo-container">
                <img id="logo" src="src/general/logologin.png" alt="Logo da plataforma">
            </div>
        </div>
    </div>
</body>

</html>
