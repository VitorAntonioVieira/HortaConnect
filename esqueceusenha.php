<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueci a senha</title>
    <link rel="stylesheet" href="./css/cadastro.css">
</head>

<body>
    <a href="index.php" class="back-button">
        <img src="src/login/seta-esquerda.png" alt="Voltar" />
    </a>
    <div class="container">
        <div class="left">
            <form action="crud/processar_login.php" method="POST" class="formLogin">
                <h1>Esqueci minha senha</h1>
                <p>Digite o e-mail associado à sua conta para recuperar sua senha.</p>
                <label for="email">E-mail</label>
                <input type="email" placeholder="Digite seu e-mail" autofocus="true" id="email" name="email" required />
                
                <div class="btn-container">
                    <input type="submit" value="Recuperar senha" class="btn" />
                </div>
                
                <p>Não tem cadastro? <a href="cadastro.php">Cadastre-se</a></p>
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
