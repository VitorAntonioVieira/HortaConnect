<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <form action="">
        <img src="src/header-logo.png" class="logologin" alt="" srcset="">
        <input type="email" class="formzao" name="email" placeholder="Email" autocomplete="off" id="email">
        <input type="password" class="formzao" name="senha" placeholder="Senha" id="senha">
        <i class="fa-regular fa-eye" id="show-password"></i>
        <input type="submit" value="Entrar" id="botaologin">
        <div class="container">
            <p id="naotenho">Não tem conta? <a class="cadastre-se" href="cadastro.php">Cadastre-se</a></p>
            <p id=""><a class="esqueceur" href="redefinirsenha.php">Esqueci minha senha</a></p><br>
            <a href="index.php" class="voltar">Voltar a página inicial</a>
        </div>
    </form>
</body>
</html>
