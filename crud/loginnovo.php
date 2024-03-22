<?php
session_start();
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $sql_consulta = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $res = $conn->query($sql_consulta);


    if ($res->num_rows == 1) {
        $funcionario = $res->fetch_assoc();
        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['funcionario_id'] = $usuario['id'];
            $_SESSION['email'] = $usuario['email'];
            echo "logado";
        }
        ;


    } else {
        setcookie("login", $login);
        header("Location:index.php");
        echo "erro ou logar";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/loginnovo.css">
</head>

<body>
    <div class="page">
        <form action="#" method="POST" class="formLogin">
            <h1>Login</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email">E-mail</label>
            <input type="email" placeholder="Digite seu e-mail" autofocus="true" name="email" />
            <label for="password">Senha</label>
            <input type="password" placeholder="Digite sua senha" name="senha" />
            <a href="cadastro.php">Não tem cadastro?</a>
            <a href="#">Esqueci minha senha</a>
            <a href="./agradecimento.php"><input type="submit" value="Acessar" class="btn" /></a>
        </form>
    </div>

</body>

</html>