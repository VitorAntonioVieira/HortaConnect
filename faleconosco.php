<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $telefone = $_POST["telefone"];

 "Email: " . htmlspecialchars($email) . "<br>";
    "Senha: " . htmlspecialchars($senha) . "<br>";
 "Telefone: " . htmlspecialchars($telefone) . "<br>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-R5xP5N6Hz8pKK8DJTR7p8/EIbWiX1/fmITtrUc0MlM8T4GCx/Mk2aKTZb82s35YELL9PJx1Ft2ZZkmw+NUsAew==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
   body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e1f5e9;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            max-width: 400px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            border: 2px solid bl; /* Adiciona a borda */
        }

        h2 {
            color: #4caf50;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            color: #4caf50;
        }

        input {
            padding: 10px;
            margin-bottom: 16px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            border: none;
            padding: 12px;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .icon {
            color: #4caf50;
            margin-right: 8px;
        }
    </style>
    <title>Fale Conosco</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>

        <label for="telefone">Número de Telefone:</label>
        <input type="tel" name="telefone" required>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>

