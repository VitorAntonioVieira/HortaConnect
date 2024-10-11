<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Redefinir senha</title>
    <link rel="stylesheet" href="./css/loginnovo.css">
</head>

<body>
    <div class="page">
        <form action="crud/processar_redefinir.php" method="POST" class="formLogin">
            <div class="logo-container">
                <img id="logo" src="src/general/header-logo.svg">
            </div>
            <p>Digite os seus dados de acesso nos campos abaixo.</p>
            <label for="email">Email</label>
            <input type="email" placeholder="Digite seu e-mail" autofocus="true" id="email" name="email" />
            <label for="senha">Nova senha</label>
            <input type="password" placeholder="Digite sua nova senha" name="senha" id="senha" />
            <p>Não tem cadastro? <a href="cadastro.php">Cadastre-se</a></p>
            <a href="#">Esqueci minha senha</a>
            <input type="submit" value="Entrar" class="btn" />
        </form>
    </div>
</body>

</html>