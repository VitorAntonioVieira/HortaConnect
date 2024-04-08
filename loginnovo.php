<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Login</title>
    <link rel="stylesheet" href="./css/loginnovo.css">
</head>

<body>
    <div class="page">
        <form action="crud/processar_login.php" method="POST" class="formLogin">
            <h1>Login</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email">E-mail</label>
            <input type="email" placeholder="Digite seu e-mail" autofocus="true" id="email" name="email" />
            <label for="senha">Senha</label>
            <input type="password" placeholder="Digite sua senha" name="senha" id="senha" />
            <a href="crud/cadastro.php">Não tem cadastro?</a>
            <a href="#">Esqueci minha senha</a>
            <input type="submit" value="Acessar" class="btn" />
        </form>
    </div>
</body>

</html>