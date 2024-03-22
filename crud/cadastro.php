<?php
 include "conexao.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nomeCompleto = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $hashed_password = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $sql = "INSERT INTO usuarios (nomeCompleto, email, senha) VALUES (?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    $stmt->bind_param("sss", $nomeCompleto, $email, $hashed_password);
    $stmt->execute();
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Cadastre-se</title>
</head>
<body>
<div class="page">
        <form action="#" method="POST" class="formLogin">
            <h1>Cadastre-se</h1>
            <p>Digite os seus dados de acesso noa campos abaixo.</p>
            <label for="email">E-mail</label>
            <input type="email" placeholder="Insira seu e-mail" autofocus="true" name="email" />
            <label for="email">Nome Completo</label>
            <input name="nome" type="text" placeholder="Insira sue nome Completo" autofocus="true"  />
            <label for="password">Senha</label>
            <input type="password" placeholder="Digite sua senha" name="senha"/>
            <a href="loginnovo.php">Já tem acesso?</a>
            <a href="#">Esqueci minha senha</a>
            <a href="./agradecimento.php"><input type="submit" value="Acessar" class="btn" /></a>
        </form>
    </div>
</body>
</html>