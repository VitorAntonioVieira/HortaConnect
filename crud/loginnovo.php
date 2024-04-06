<?php
include 'conexao.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql_consulta = "SELECT * FROM usuarios WHERE email = '$email'";
    $res = $conn->query($sql_consulta);

    if ($res->num_rows == 1) {
        $usuario = $res->fetch_assoc();
        // $senha_hash = $id['id'];

            $_SESSION['senha'] = $usuario['senha'];
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['email'] = $usuario['email'];
            header('Location: mercado.php');
        } else {
            echo "Erro ao logar 1";
        }
    }
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/loginnovo.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    />
    <title>Login</title>
  </head>
  <body>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="#"><br><br>
          <h1>Cadastre-se!</h1><br>

          <input type="email" placeholder="Email" id="email" />
          <input type="text" name="nome" placeholder="Nome Completo" id="name" />
          <input type="password" name="senha" placeholder="Senha" id="senha" />
          <button>Cadastrar</button>
          <br /><br /><br /><br />

          <div class="social-container">
            <a href="https:www.instagram.com/hortaConnect/" class="social" id="ins">
              <i class="fab fa-instagram"> </i>
            </a>
            <a href="https://www.twitter.com" class="social" id="tw">
              <i class="fab fa-twitter"></i>
            </a>
          </div>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form action="#" method="POST">
        <br><br>
          <h1>Login</h1><br>

          <input type="email" placeholder="Email" id="mail" />
          <input type="password" placeholder="Senha" id="pass" />
          <button>Entrar</button>
          <a class="esqueceur" href="redefinirsenha.php">Esqueci minha senha</a>
          <br /><br /><br /><br /><br /><br />

          <div class="social-container">
            <a href="https://www.instagram.com" class="social" id="ins">
          <h1>Login</h1>

          <input type="email" name="email" placeholder="Email" id="mail" />
          <input type="password" name="senha"placeholder="Senha" id="pass" />
          <input type="submit" value="Entrar" id="botaologin">
          <br /><br /><br /><br /><br /><br />

          <div class="social-container">
            <a href="https:www.instagram.com/hortaConnect/" class="social" id="ins">
              <i class="fab fa-instagram"> </i>
            </a>
            <a href="https://www.twitter.com" class="social" id="tw">
              <i class="fab fa-twitter"></i>
            </a>
          </div>
         <a href="index.php"> <p id="pagina-principal">Voltar para pagina principal</p></a>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
          <img src="src/general/header-logo.png" class="logologin" alt="" srcset="">
            <p>
             "Transformando sementes de ideias, em colheitas de sucesso”
            </p>
            <br />
            <p style="color: rgb(0, 68, 255)">Já tem uma conta?</p>
            <button class="press" id="signIn">Faça Login!</button>
          </div>
          <div class="overlay-panel overlay-right">
          <img src="src/general/header-logo.png" class="logologin" alt="" srcset="">
            <p>"Transformando sementes de ideias, em colheitas de sucesso”</p>
            <br />
            <p style="color: rgb(0, 68, 255)">Não tem uma conta?</p>
            <button class="press" id="signUp" style="color: rgb(57, 49, 5)">
              Cadastre-se!
            </button>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      const signUpButton = document.getElementById("signUp");
      const signInButton = document.getElementById("signIn");
      const container = document.getElementById("container");

      signUpButton.addEventListener("click", () => {
        container.classList.add("right-panel-active");
      });

      signInButton.addEventListener("click", () => {
        container.classList.remove("right-panel-active");
      });
    </script>
  </body>
</html>
