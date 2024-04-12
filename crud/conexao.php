<?php
$conn = new mysqli("localhost", "root", "", "bd_hortaconnect");
if ($conn->connect_error) {
    die("Erro de conexão" . $conn->connect_error);
}
?>