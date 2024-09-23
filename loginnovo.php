<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/loginnovo.css">
</head>

<body>
    <a href="index.php" class="back-button">
        <img src="src\login\seta-esquerda.png" alt="Voltar" />
    </a>
    <div class="container">
        <div class="left">
            <form action="crud/processar_login.php" method="POST" class="formLogin">
                <h1>Acesse a plataforma</h1>
                <p>Digite seus dados de acesso nos campos abaixo.</p>
                <label for="email">E-mail</label>
                <input type="email" placeholder="Digite seu e-mail" autofocus="true" id="email" name="email" aria-label="Digite seu e-mail" />
                <label for="senha">Senha</label>
                <input type="password" placeholder="Digite sua senha" name="senha" id="senha" aria-label="Digite sua senha" />
                <a href="#">Esqueceu a senha?</a>
                
                <div class="btn-container">
                    <input type="submit" value="Entrar" class="btn" />
                </div>

                <p>Ainda não tem uma conta? <a href="cadastro.php">Inscreva-se</a></p>
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
