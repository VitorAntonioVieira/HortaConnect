<?php
session_start();
include './conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    echo "$senha";

    $sql_consulta = "SELECT * FROM usuarios WHERE email = '$email'";
    $res = $conn->query($sql_consulta);

    if ($res->num_rows == 1) {
        // echo'teste';
        $array_criado = $res->fetch_assoc();
        // echo'teste2';
        
        // echo $senha_banco;
        if (password_verify($senha, $array_criado['senha'])) {
            echo "logado";
            $_SESSION['id'] = $array_criado['id'];
            $_SESSION['email'] = $array_criado['email'];
            header("Location:cadastro.php");
        }
    } else {
        setcookie("email", $email);
        echo "erro ou logar";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Login</title>
    <link rel="stylesheet" href="../css/loginnovo.css">
</head>

<body>
    <div class="page">
        <form action="" method="POST" class="formLogin">
            <h1>Login</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email">E-mail</label>
            <input type="email" placeholder="Digite seu e-mail" autofocus="true" id="email" name="email" />
            <label for="senha">Senha</label>
            <input type="password" placeholder="Digite sua senha" name="senha" id="senha" />
            <a href="cadastro.php">Não tem cadastro?</a>
            <a href="#">Esqueci minha senha</a>
            <input type="submit" value="Acessar" class="btn" />
        </form>
    </div>
</body>

</html>