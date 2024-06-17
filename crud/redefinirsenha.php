<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME']) && $_SESSION['usuario_logado'] !== true) {
        session_destroy();
        header('Location: ../index.php');
        exit;
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
        include './conexao.php';

        $email = $_POST['email'];

        $sql_consulta = "SELECT * FROM usuarios WHERE email = '$email' LIMIT 1";
        $res = $conn->query($sql_consulta);

        if ($res->num_rows == 1) {
            $user = $res->fetch_assoc();
            $id = $user['id'];
            $hashed_password = password_hash($_POST['senha'], PASSWORD_DEFAULT);

            $sql_consulta = "UPDATE usuarios SET senha = '$hashed_password' WHERE id = '$id'";

            header('Location: ../loginnovo.php?set=senha');
        }
        header('Location: ../redefinir.php?err=email');
    }
?>