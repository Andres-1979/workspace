<?php
// index.php
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/sobre_nosotros.css">

    <title>Matematicas divertidas </title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="../index.php" class="nav__logo">
                Matematicas <br>
                Divertidas
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
        
                    <li class="nav__item">
                        <a href="./sobre_nosotros.php" class="nav__link">Sobre nosotros</a>
                    </li>
                    <li class="nav__item">
                        <a href="./como_funciona.php" class="nav__link">Cómo funciona</a>
                    </li>

                    <li class="nav__item">
                        <a href="./contacto.php" class="nav__link">Contacto</a>
                    </li>
                </ul>


            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->


        <!-- ======== SOBRE NOSOTROS ======== -->
        <section class="about">
            <div class="about__container container">
                <div class="about__content">
                    <h2 class="about__title">Sobre Nosotros</h2>
                    <p class="about__description">
                        En <strong>Matemáticas Divertidas</strong> creemos que aprender puede ser tan emocionante
                        como un viaje al espacio 🚀. Aquí los niños descubren que las matemáticas no son aburridas,
                        ¡sino un juego lleno de aventuras!
                    </p>
                    <p class="about__description">
                        Con ayuda de nuestra mascota <b>MonoMat</b>, cada reto es una nueva misión espacial
                        llena de juegos, quizzes y diversión 🌌.
                    </p>
                </div>

                <div class="about__images">
                    <div id="mensaje-correcto"></div>
                    <div id="mensaje-incorrecto"></div>
                    <img src="../../assets/img/planet.svg" alt="Ponts detail" class="home__planet-1"
                        onclick="generateMathChallenge()">
                    <span class="click-hint">¡Haz click en el planeta! 🌟</span>
                    <img src="../../assets/img/rocket.svg" alt="Ponts detail" class="home__rocket">
                </div>
                <!-- Reto Matemático -->
                <div class="math-challenge hidden" id="mathChallenge">
                    <div class="math-box">
                        <h3>¡Reto Matemático! 🧮</h3>
                        <p id="mathQuestion"></p>
                        <input type="number" id="mathAnswer" placeholder="Tu respuesta">
                        <button id="checkAnswer">Responder</button>
                    </div>
                </div>
            </div>
        </section>


    </main>

    <!--=============== GSAP ===============-->
    <script src="../../assets/js/gsap.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="../../assets/js/main.js"></script>
    <script src="../../assets/js/sobre_nosotros.js"></script>

</body>

</html>