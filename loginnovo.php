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
          <h1>Cadastre-se!</h1>

          <input type="email" placeholder="Email" id="mail" />
          <input type="text" placeholder="Nome Completo" id="name" />
          <input type="password" placeholder="Senha" id="pass" />
          <button>Cadastrar</button>
          <br /><br /><br /><br />

          <div class="social-container">
            <a href="https:www.instagram.com" class="social" id="ins">
              <i class="fab fa-instagram"> </i>
            </a>
            <a href="https://www.twitter.com" class="social" id="tw">
              <i class="fab fa-twitter"></i>
            </a>
          </div>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form action="#">
          <h1>Login</h1>

          <input type="email" placeholder="Email" id="mail" />
          <input type="password" placeholder="Senha" id="pass" />
          <button>Entrar</button>
          <br /><br /><br /><br /><br /><br />

          <div class="social-container">
            <a href="https:www.instagram.com" class="social" id="ins">
              <i class="fab fa-instagram"> </i>
            </a>
            <a href="https://www.twitter.com" class="social" id="tw">
              <i class="fab fa-twitter"></i>
            </a>
          </div>
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
