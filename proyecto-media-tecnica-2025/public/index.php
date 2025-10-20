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
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/footer.css">

    <title>Matematicas divertidas </title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                Matematicas <br>
                Divertidas
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">

                    <li class="nav__item">
                        <a href="./dashboard/sobre_nosotros.php" class="nav__link">Sobre nosotros</a>
                    </li>
                    <li class="nav__item">
                        <a href="./dashboard/como_funciona.php" class="nav__link">Cómo funciona</a>
                    </li>

                    <li class="nav__item">
                        <a href="./dashboard/contacto.php" class="nav__link">Contacto</a>
                    </li>
                </ul>

                <a href="login.php" class="nav__button">Iniciar sesión</a>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home">
            <div class="home__container">
                <div class="home__content">
                    <h3 class="home__subtitle">
                        Explora el
                        mundo de las matemáticas
                    </h3>
                    <h1 class="home__title">
                        <span>
                            Matematicas <br>
                            divertidas
                        </span>
                        <img src="../assets/img/line.svg" alt="Line image">
                    </h1>

                    <p class="home__description">
                        “Un lugar para aprender matemáticas
                        jugando con retos y actividades divertidas.”
                    </p>

                    <a href="#" class="home__button">
                        Empieza Ahora!
                    </a>
                </div>

                <div class="home__images">
                    <img src="../assets/img/points-space.svg" alt="Ponts detail" class="home__points">
                    <img src="../assets/img/planet.svg" alt="Ponts detail" class="home__planet-2">
                    <img src="../assets/img/planet.svg" alt="Ponts detail" class="home__planet-1">
                    <img src="../assets/img/monoMath.png" alt="Ponts detail" class="home__rocket">
                </div>
            </div>
            <img src="../assets/img/clouds-1.svg" alt="" class="home__cloud-1">
            <img src="../assets/img/clouds-2.svg" alt="" class="home__cloud-2">
        </section>
    </main>


    </footer>
    <footer
        style="background-color:#2c1b5b; color:#fff; padding:40px 20px; text-align:center; font-family: 'Arial', sans-serif;">
        <div style="display:flex; flex-wrap:wrap; justify-content:space-around; align-items:flex-start; gap:20px;">

            <!-- Logo y redes sociales -->
            <div>
                <h2 style="font-size:1.2em;">🧑‍🚀 Matemáticas Divertidas</h2>
                <p>Sobre nosotros | Cómo funciona | Contacto</p>
                <div style="font-size:1.5em; margin-top:10px;">
                    <a href="#" style="color:#fff; margin:0 5px;">f</a>
                    <a href="#" style="color:#fff; margin:0 5px;">📸</a>
                    <a href="#" style="color:#fff; margin:0 5px;">🐦</a>
                </div>
            </div>

            <!-- Suscripción -->
            <div>
                <h3>Suscríbete</h3>
                <input type="email" placeholder="Tu correo"
                    style="padding:5px; border-radius:5px; border:none; margin-bottom:5px;">
                <button
                    style="padding:5px 10px; background-color:#ffb347; border:none; border-radius:5px; cursor:pointer;">Enviar</button>
            </div>

            <!-- Mini-juego diario -->
            <div>
                <h3>Reto diario</h3>
                <button
                    style="padding:10px 15px; background-color:#ff7f50; border:none; border-radius:8px; cursor:pointer;">¡Jugar
                    ahora!</button>
            </div>

            <!-- Descargas -->
            <div>
                <h3>Descargas</h3>
                <a href="#" style="color:#fff; display:block; margin:5px 0;">Imprimibles</a>
                <a href="#" style="color:#fff; display:block; margin:5px 0;">Guías para padres</a>
            </div>

            <!-- Navegación y accesibilidad -->
            <div>
                <h3>Opciones</h3>
                <button onclick="window.scrollTo({top:0, behavior:'smooth'})"
                    style="padding:5px 10px; margin-bottom:5px; background-color:#6a0dad; border:none; border-radius:5px; color:#fff; cursor:pointer;">Inicio</button>
                <button
                    style="padding:5px 10px; background-color:#444; border:none; border-radius:5px; color:#fff; cursor:pointer;">Modo
                    oscuro</button>
            </div>

        </div>

        <p style="margin-top:30px; font-size:0.9em;">© 2025 Matemáticas Divertidas. Todos los derechos reservados.</p>
    </footer>



    <!--=============== GSAP ===============-->
    <script src="../assets/js/gsap.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="../assets/js/main.js"></script>

</body>

</html>