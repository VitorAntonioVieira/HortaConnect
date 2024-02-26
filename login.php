<?php
include 'crud/conexao.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql_consulta = "SELECT * FROM usuarios WHERE email = '$email'";
    $res = $conn->query($sql_consulta);

    if ($res->num_rows == 1) {
        $funcionario = $res->fetch_assoc();
        // $senha_hash = $id['id'];

            $_SESSION['senha'] = $usuario['senha'];
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['email'] = $usuario['email'];
            header('Location: mercado.php');
        } else {
            echo "Erro ao logar 1";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
<<<<<<< HEAD

    <form action="" method="POST">
    <h1 id="logintitulo">Login</h1>

    <input type="email" class="formzao" name="email" placeholder="Email" autocomplete="off"
        id="email">
    <br><br>
    <input type="password" class="formzao" name="senha" placeholder="Senha" id="senha">
    <i class="fa-regular fa-eye" id="show-password"></i><br><br>

    <input type="submit" value="Entrar" id="botaologin">

    <p id="naotenho">Não tem conta?<a class="cadastre-se" href="cadastro.php">Cadastre-se</a></p>

    <p id=""><a class="esqueceur" href="redefinirsenha.php">Esqueci minha senha</a></p>

    <a href="index.php" class="voltar">Voltar a página inicial</a>
=======
    <form action="">
        <img src="src/general/header-logo.png" class="logologin" alt="" srcset="">
        <input type="email" class="formzao" name="email" placeholder="Email" autocomplete="off" id="email">
        <input type="password" class="formzao" name="senha" placeholder="Senha" id="senha">
        <i class="fa-regular fa-eye" id="show-password"></i>
        <input type="submit" value="Entrar" id="botaologin">
        <div class="container">
            <p id="naotenho">Não tem conta? <a class="cadastre-se" href="cadastro.php">Cadastre-se</a></p>
            <p id=""><a class="esqueceur" href="redefinirsenha.php">Esqueci minha senha</a></p><br>
            <a href="index.php" class="voltar">Voltar a página inicial</a>
        </div>
>>>>>>> 3cc988e41773a3e394a6f820927deb1f66cdfce3
    </form>
</body>
</html>
