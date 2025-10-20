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
    <link rel="stylesheet" href="../../assets/css/como-funciona.css">

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
        <header class="header__main">
            <h1>🚀 Cómo funciona Matemáticas Divertidas</h1>
            <p>Descubre cómo aprender jugando paso a paso</p>
        </header>
        <!-- ======== CÓMO FUNCIONA ======== -->
        <section class="how">
            <div class="how__grid">
                <!-- Juegos -->
                <div class="how__card locked">
                    <img src="../../assets/img/juegos.png" alt="Juegos" class="how__icon">
                    <h3>Juegos</h3>
                    <p>Explora juegos interactivos para aprender matemáticas.</p>
                    <div class="lock-overlay">
                        <span>🔒 Inicia sesión para jugar</span>
                    </div>
                    <button class="btn-login">Inicia Sesión</button>
                </div>

                <!-- Quizzes -->
                <div class="how__card locked">
                    <img src="../../assets/img/notas.png" alt="Quizzes" class="how__icon">
                    <h3>Quizzes</h3>
                    <p>Responde preguntas divertidas y gana estrellas ⭐.</p>
                    <div class="lock-overlay">
                        <span>🔒 Disponible al iniciar sesión</span>
                    </div>
                    <button class="btn-login">Inicia Sesión</button>
                </div>

                <!-- Videos -->
                <div class="how__card locked">
                    <img src="../../assets/img/videos.png" alt="Videos" class="how__icon">
                    <h3>Videos</h3>
                    <p>Aprende con videos cortos y fáciles de entender.</p>
                    <div class="lock-overlay">
                        <span>🔒 Solo para usuarios registrados</span>
                    </div>
                    <button class="btn-login">Regístrate Gratis</button>
                </div>

                <!-- MonoMat -->
                <div class="how__card">
                    <img src="../../assets/img/monoMath.png" alt="MonoMat" class="how__icon">
                    <h3>MonoMat</h3>
                    <p>Tu mascota guía en esta aventura matemática 🐵🚀.</p>
                </div>
            </div>
            <!-- Fondo con estrellas -->
            <div id="stars"></div>



            <!-- Timeline de pasos -->
            <section class="timeline">
                <div class="step">
                    <img src="../../assets/img/monoMath.png" alt="MonoMat" class="monomath">
                    <h2>1. Regístrate</h2>
                    <p>Crea tu cuenta para comenzar la aventura espacial de las matemáticas.</p>
                </div>
                <div class="step">
                    <img src="../../assets/img/planet.svg" alt="Planeta">
                    <h2>2. Explora juegos</h2>
                    <p>Elige entre juegos divertidos y desafíos de matemáticas.</p>
                </div>
                <div class="step">
                    <img src="../../assets/img/rocket.svg" alt="Cohete">
                    <h2>3. Juega Quizzes</h2>
                    <p>Responde preguntas y mejora tus habilidades con cada intento.</p>
                </div>
                <div class="step">
                    <img src="../../assets/img/favicon.png" alt="Estrella">
                    <h2>4. Gana puntos</h2>
                    <p>Acumula estrellas y demuestra que eres un experto matemático ⭐.</p>
                </div>
            </section>

            <!-- Mini Quiz de prueba -->
            <section class="mini-quiz">
                <h2>🎮 Prueba un quiz</h2>
                <p>¿Cuánto es <strong>2 + 2</strong>?</p>
                <div class="options">
                    <button onclick="checkAnswer(3)">3</button>
                    <button onclick="checkAnswer(4)">4</button>
                    <button onclick="checkAnswer(5)">5</button>
                </div>
                <p id="quiz-result"></p>
            </section>

            <!-- CTA -->
            <section class="cta">
                <button class="cta-btn" onclick="alertaLogin()">Quiero jugar 🚀</button>
            </section>
        </section>
    </main>

    <script src="../assets/js/como-funciona.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="../assets/js/main.js"></script>

</body>

</html>