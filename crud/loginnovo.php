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
// testando API google
require_once __DIR__ . '/vendor/autoload.php';

/**
 * Checks that the JWT assertion is valid (properly signed, for the
 * correct audience) and if so, returns strings for the requesting user's
 * email and a persistent user ID. If not valid, returns null for each field.
 *
 * @param string $idToken The JWT string to assert.
 * @param string $audience The audience of the JWT.
 *
 * @return string[] array containing [$email, $id]
 * @throws Exception on failed validation
 */
function validate_assertion(string $idToken, string $audience) : array
{
    $auth = new Google\Auth\AccessToken();
    $info = $auth->verify($idToken, [
      'certsLocation' => Google\Auth\AccessToken::IAP_CERT_URL,
      'throwException' => true,
    ]);

    if ($audience != $info['aud'] ?? '') {
        throw new Exception(sprintf(
            'Audience %s did not match expected %s', $info['aud'], $audience
        ));
    }

    return [$info['email'], $info['sub']];
}

/**
 * This is an example of a front controller for a flat file PHP site. Using a
 * static list provides security against URL injection by default.
 */
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
        if (!Google\Auth\Credentials\GCECredentials::onGce()) {
            throw new Exception('You must deploy to appengine to run this sample');
        }
        $metadata = new Google\Cloud\Core\Compute\Metadata();
        $audience = sprintf(
            '/projects/%s/apps/%s',
            $metadata->getNumericProjectId(),
            $metadata->getProjectId()
        );
        $idToken = getallheaders()['X-Goog-Iap-Jwt-Assertion'] ?? '';
        try {
            list($email, $id) = validate_assertion($idToken, $audience);
            printf("<h1>Hello %s</h1>", $email);
        } catch (Exception $e) {
            printf('Failed to validate assertion: %s', $e->getMessage());
        }
        break;
    case '': break; // Nothing to do, we're running our tests
    default:
        http_response_code(404);
        exit('Not Found');
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