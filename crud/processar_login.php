<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME']) && $_SESSION['usuario_logado'] !== true) {
    session_destroy();
    header('Location: ../index.php');
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    include './conexao.php';

    $email = $_POST['email'];

    $sql_consulta = "SELECT * FROM usuarios WHERE email = '$email' LIMIT 1";
    $res = $conn->query($sql_consulta);

    if ($res->num_rows == 1) {
        // 
        $user = $res->fetch_assoc();
        echo $user['senha'];
        if(password_verify($_POST['senha'], $user['senha'])==true){
            session_start();
            $_SESSION['usuario_logado'] = $$user['nomeCompleto'];

            sleep(1);
            header('Location: ../index.php');
        } else {
            sleep(1);
            header('Location: ../loginnovo.php?err='.$user['senha']);
        }
        // if (password_verify($_POST['senha'], $user['senha'])) {
        //     echo "logado";
        //     $_SESSION['id'] = $user['id'];
        //     $_SESSION['email'] = $user['email'];
        //     header('Location: ../index.php');
        // } else {
        //     echo "Senha incorreta";
        // }
    } else {
        setcookie("email", $email);
        echo "erro ou logar";
    }
}
?>