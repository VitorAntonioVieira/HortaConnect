<?php
// Iniciar a sessão
session_start();

// Verificar se o usuário está logado
if (isset($_SESSION['usuario_logado'])) {
    // Destruir todas as variáveis de sessão
    session_unset();

    // Destruir a sessão
    session_destroy();
    sleep(1);
    // Redirecionar para a página de login ou qualquer outra página desejada após o logout
    header("Location: ../index.php");
    exit();
}
