<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="shortcut icon" href="../the-rosa/images/favicon.ico" type="image/x-icon">
  <title>Sobre nós</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <!--Font awesome CDN-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
  <!--Scroll reveal CDN-->
  <script src="https://unpkg.com/scrollreveal"></script>
  <link rel="stylesheet" href="css/sobrenos.css" />
</head>

<body>
  <nav class="navbar fixed-top" style="display:none">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src=".src/general/header-logo.svg" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src=".src/general/header-logo.svg" alt=""></h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Página inicial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./sobrenos.php">Sobre nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./solucoes.php">Soluções tecnológicas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#f-form">Contato</a>
            </li>
            <li class="nav-item">
              <a href="./loginnovo.php"><button class="transitionScale login-btn">Login</button></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Header Start -->
  <nav class="header">
    <div class="info">
      <div class="logo-nav-box">
        <img id="logo-nav" src="./src/general/header-logo.svg">
      </div>
      <div class="nav-wrap">
        <ul class="menu">
          <li><a href="index.php">Página Inicial</a></li>
          <li><a href="sobrenos.php">Sobre nós</a></li>
          <li><a href="solucoes.php">Soluções Tecnológicas</a></li>
          <li><a href="#f-form">Contato</a></li>
        </ul>
        <a href="./loginnovo.php"><button class="transitionScale login-btn">Login</button></a>
      </div>
    </div>
  </nav>
  <!-- Header End -->
  <!-- Discover Our Story --> <br><br><br><br><br><br>
  <section class="dicover-our-story">
    <div class="container">
      <div class="restaurant-info" id="panel">
        <div class="restaurant-description padding-right animate-left">
          <div class="global-headline">
            <!-- <h2 class="sub-headline">
              <span class="first-letter">D</span>iscover
            </h2> -->
            <h1 class="headline headline-dark">Sobre nós</h1>
            <!-- <div class="asterisk"><i class="fas fa-asterisk"></i></div> -->
            <hr id="hr" />
          </div>
          <p>
            Na interseção entre a inovação tecnológica e a agricultura responsável, nasce a
            HORTA CONNECT. Somos
            mais do que uma empresa, somos uma missão: ajudar produtores rurais a prosperar, impulsionando o uso
            inteligente da tecnologia em suas operações, enquanto preservamos e protegemos nosso meio ambiente.
          </p>
          <!-- <a href="#" class="btn body-btn">About Us</a> -->
        </div>
        <div class="restaurant-info-img animate-right">
          <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="400px" height="400px"
            viewBox="0 0 2002.000000 1909.000000" preserveAspectRatio="xMidYMid meet">
            <g transform="translate(0.000000,1909.000000) scale(0.100000,-0.100000)" fill="blue" stroke="none">
              <path d="M8639 19062 c-119 -316 -1203 -3161 -1208 -3170 -4 -8 -71 -40 -147
-71 -76 -31 -192 -81 -258 -111 -101 -46 -122 -52 -145 -43 -14 5 -718 333
-1563 727 l-1537 718 -920 -887 c-507 -488 -921 -890 -921 -894 0 -3 323 -754
717 -1668 567 -1312 720 -1659 731 -1651 7 6 14 9 16 7 8 -9 -104 -265 -121
-275 -10 -6 -753 -290 -1650 -630 l-1633 -619 3 -1289 2 -1289 1632 -621 1631
-620 32 -86 c52 -136 173 -415 237 -546 l60 -120 2488 1317 2489 1317 40 54
c205 272 490 477 804 577 l114 36 -7 60 c-12 113 -125 710 -165 870 -51 207
-93 333 -195 585 -208 515 -399 903 -658 1335 -95 160 -468 728 -473 722 -2
-2 21 -72 52 -157 156 -432 305 -1044 326 -1337 15 -206 23 -197 -172 -190
-124 4 -165 10 -282 41 -271 70 -449 153 -640 296 -107 81 -263 234 -360 356
-304 377 -576 1003 -713 1639 -44 206 -99 516 -119 671 -23 177 -47 489 -40
509 12 30 51 36 163 25 307 -31 408 -45 641 -86 448 -78 541 -100 795 -185
486 -163 726 -269 965 -426 394 -260 621 -508 756 -828 173 -409 204 -842 90
-1244 -61 -212 -61 -216 30 -362 117 -187 218 -417 359 -814 31 -88 62 -166
70 -174 16 -17 16 -17 124 139 44 63 130 176 191 250 61 74 116 145 122 158 9
17 7 43 -10 115 -34 151 -45 261 -39 407 8 199 46 355 133 535 116 243 287
432 554 614 308 210 572 320 1065 446 375 96 578 132 933 166 169 16 159 31
144 -208 -26 -393 -35 -454 -123 -813 -157 -636 -358 -1042 -669 -1350 -227
-224 -444 -337 -770 -401 -134 -26 -288 -31 -313 -10 -26 21 -21 83 17 233 79
315 190 543 442 915 68 100 124 185 124 188 0 4 -12 -1 -27 -10 -163 -105
-488 -458 -739 -805 -180 -248 -254 -365 -470 -745 -232 -408 -293 -549 -394
-917 -35 -129 -46 -184 -38 -189 6 -4 31 -10 55 -14 86 -13 270 -77 388 -136
206 -102 410 -266 551 -444 l66 -84 2512 -1312 c1381 -722 2535 -1326 2565
-1343 l55 -31 59 120 c81 163 172 370 241 545 l57 146 1616 614 c889 338 1621
620 1628 625 10 8 12 278 7 1286 l-5 1275 -1642 624 -1642 623 -58 141 c-32
78 -65 159 -73 181 l-15 40 723 1640 c397 902 724 1643 726 1646 5 10 -1827
1794 -1840 1791 -6 -2 -730 -332 -1608 -734 l-1597 -730 -148 63 c-81 34 -210
86 -286 115 -76 28 -142 56 -147 60 -4 5 -272 707 -595 1559 -323 853 -591
1553 -594 1556 -3 4 -581 9 -1284 12 l-1278 6 -10 -27z" fill="#181818" />
              <path d="M9702 5563 c-133 -1929 -245 -3520 -247 -3535 -4 -24 1 -30 43 -48
152 -68 368 -101 535 -83 105 12 235 45 321 82 l49 21 -6 63 c-3 34 -103 1617
-222 3517 -119 1900 -220 3463 -223 3473 -4 10 -117 -1560 -250 -3490z" fill="#181818" />
              <path d="M6975 6585 c-1221 -1191 -2262 -2209 -2313 -2263 l-93 -97 17 -45
c36 -99 140 -283 213 -381 98 -131 250 -277 372 -358 95 -64 258 -151 281
-151 7 1 42 43 78 96 465 679 3622 5281 3647 5317 19 26 31 47 26 47 -4 0
-1007 -975 -2228 -2165z" fill="#181818" />
              <path d="M10636 8673 c49 -76 3672 -5361 3687 -5378 9 -11 23 -29 31 -39 13
-19 15 -19 57 -3 202 77 480 305 632 517 66 93 205 355 210 396 1 16 -540 550
-2311 2277 -1272 1242 -2315 2257 -2319 2257 -3 0 3 -12 13 -27z" fill="#181818" />
            </g>
          </svg>
        </div>
      </div>
    </div>
  </section>
  <!-- Discover Our Story End -->
  <!-- Tasteful Recipes -->
  <section class="tasteful-recipes between">
    <div class="container">
      <div class="animate-bottom text-center">
        <hr id="hr2" />
        <h1 class="headline" style="color: #376633;">HORTA CONNECT</h1>
        <hr id="hr2" />
      </div>
    </div>
    </div>
  </section>
  <!-- Tasteful Recipes End -->
  <!-- Discover Our Menu -->
  <section class="discover-our-menu">
    <div class="container">
      <div class="restaurant-info">
        <div class="image-group padding-right animate-left">
          <img src="src/sobrenos/img1.png" alt="" />
          <img src="src/sobrenos/img2.png" alt="" />
          <img src="src/sobrenos/img3.png" alt="" />
          <img src="src/sobrenos/img4.png" alt="" />
        </div>
        <div class="restaurant-description animate-right">
          <div class="global-headline">
            <!-- <h2 class="sub-headline">
              <span class="first-letter">D</span>iscover
            </h2> -->
            <h1 class="headline headline-dark">Nosso Propósito</h1>
            <!-- <div class="asterisk"><i class="fas fa-asterisk"></i></div> -->
            <br><br>
          </div>
          <p>
            Somos um projeto criado para ajudar produtores rurais, com o objetivo de maximizar o uso da tecnologia
            nas
            produções, auxiliando no impacto econômico e social, de modo que não haja impacto no meio ambiente.
            Reconhecemos o valor essencial da agricultura para a sociedade e para a economia, e acreditamos que é
            possível cultivar de maneira sustentável, sem comprometer o futuro das próximas gerações..
          </p>
          <!-- <a href="#" class="btn body-btn">View the full menu</a> -->
        </div>
      </div>
    </div>
  </section>
  <!-- Discover Our Menu End -->
  <hr id="hr" />
  <!-- Culinary Delight -->
  <section class="culinary-delight">
    <div class="container">
      <div class="restaurant-info">
        <div class="restaurant-description padding-right animate-left">
          <div class="global-headline">
            <!-- <h2 class="sub-headline">
              <span class="first-letter">C</span>ulinary
            </h2> -->
            <h1 class="headline headline-dark">Como Funcionamos?</h1>
            <!-- <div class="asterisk"><i class="fas fa-asterisk"></i></div> -->
            <br><br>
          </div>
          <p>
            Na HORTA CONNECT, combinamos expertise em tecnologia com profundo conhecimento agrícola.
            Desenvolvemos
            soluções inovadoras, desde sistemas de monitoramento de culturas até ferramentas de gestão de recursos
            naturais, todas projetadas para otimizar a produção agrícola enquanto minimizamos o impacto ambiental.
          </p>
          <!-- <a href="#" class="btn body-btn">Make a Reservations</a> -->
        </div>
        <div class="image-group">
          <img src="src/sobrenos/imgSN1.png" class="animate-top" alt="" />
          <img src="src/sobrenos/imgSN2.png" class="animate-bottom" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- Culinary Delight End -->
  </section>
  <!-- Culinary Delight End -->
  <hr id="hr" />
  <!-- The Perfect Blend -->
  <section class="perfect-blend between">
    <div class="container">
      <div class="global-headline">
        <div class="animate-top">
          <!-- <h2 class="sub-headline">
            <span class="first-letter">T</span>he Perfect
          </h2> -->
        </div>
        <h1 class="headline" style="color: #376633;">Colaboradores</h1>
        <div class="integrantes">
          <div class="animate-bottom">
            <div class="img-integrantes">
              <div class="teste-img">
                <img id="alice" src="./src/integrantes/foto-alice.jpg">
                <div class="descricao">
                  <p class="nome">Alice de Lima</p>
                  <p class="funcao">Back-end e Segurança</p>
                </div>
              </div>
              <div class="teste-img">
                <img id="lana" src="./src/integrantes/foto-lana.jpg">
                <div class="descricao">
                  <p class="nome">Lana Araújo</p>
                  <p class="funcao">Design</p>
                </div>
              </div>
              <div class="teste-img">
                <img id="rafael" src="./src/integrantes/foto-rafael.jpg">
                <div class="descricao">
                  <p class="nome">Rafael Henrique</p>
                  <p class="funcao">Analista</p>
                </div>
              </div>
              <div class="teste-img">
                <img id="vitor" src="./src/integrantes/foto-vitor.jpg">
                <div class="descricao">
                  <p class="nome">Vitor Antonio</p>
                  <p class="funcao">Product owner</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
  </section>
  <!-- The Perfect Blend End -->
  <!-- Footer -->
  <script src="js/sobrenos.js"></script>
  <footer>
    <div class="f-container">
      <div class="f-content">
        <div class="f-element">
          <div class="f-grid">
            <div class="f-box">
              <img id="f-logo" src="./src/general/header-logo.webp" alt="">
            </div>
            <div class="f-box" style="gap: 5em">
              <div class="f-wrap">
                <img class="wrap-icon" src="./src/general/location.svg">
                <p class="wrap-text">Av. Monsenhor Theodomiro Lobo, 100 - Parque Res. Maria Elmira,
                  Caçapava - SP</p>
              </div>
              <div class="f-wrap">
                <img class="wrap-icon" src="./src/general/call.svg">
                <p class="wrap-text">(12) 99999-9999</p>
              </div>
              <div class="f-wrap">
                <img class="wrap-icon" src="./src/general/mail.svg">
                <p class="wrap-text">hortaconnect.2024@gmail.com</p>
              </div>
            </div>
            <div class="f-box" style="gap: 2em; align-items: center">
              <div class="f-wrap">
                <p class="wrap-text" style="text-align: center"><strong>@hortaconnect</strong></p>
              </div>
              <div class="f-sub">
                <a class="f-wrap" style="">
                  <img class="wrap-icon" src="./src/icone/instagram.webp">
                </a>
                <a class="f-wrap" style="">
                  <img class="wrap-icon" src="./src/icone/twitter.webp">
                </a>
              </div>
            </div>
            <div class="f-box" id="frm-cont">
              <h3 class="box-title" id="f-form">Entre em contato</h3>
              <form action="/enviar" method="post"
                style="display:flex; justify-content:center; flex-direction:column; align-items:center; width:100%">
                <input class="frm-input" type="text" id="nome" name="nome" placeholder="Nome" required>
                <input class="frm-input" type="email" id="email" name="email" placeholder="Email" required>
                <input class="frm-input" id="mensagem" name="mensagem" style="height: 10vh;"
                  placeholder="Digite sua mensagem..." required></input>
                <button type="submit" class="botao-form transitionScale">Enviar</button>
              </form>
            </div>
          </div>
        </div>
        <div class="f-element" style="display:flex; flex-direction:column;">
          <div class="f-divisor"></div>
          <p class="content-text" style="color:#ffffff">Tech Motion 2024 - SESISENAI SP</p>
        </div>
      </div>
    </div>
  </footer>
  <script src="./js/main.js"></script>
  <script src="js/sobrenos.js"></script>
</body>

</html>