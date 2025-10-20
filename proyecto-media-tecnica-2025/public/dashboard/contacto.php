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
    <link rel="stylesheet" href="../../assets/css/contacto.css">

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

    <main class="contact">
        <header class="contact__header">
            <h1>📩 Contáctanos</h1>
            <p>¿Tienes dudas o sugerencias? ¡Escríbenos y MonoMat te responderá! 🐵🚀</p>
        </header>

        <div class="contact__container">
            <!-- Formulario de contacto -->
            <section class="contact__form-section">
                <form id="contactForm" method="POST" action="procesar_contacto.php">
                    <div class="form-group">
                        <label for="nombre">👤 Nombre</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>

                    <div class="form-group">
                        <label for="email">📧 Correo</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="mensaje">💬 Mensaje</label>
                        <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
                    </div>

                    <button type="submit" class="btn-submit">Enviar 🚀</button>
                    <p id="form-message"></p>
                </form>
            </section>

                <img src="../../assets/img/monoMath.png" alt="MonoMat animado" class="contact__monomath">
        </div>

        <!-- Imagen divertida de MonoMat -->
        <div class="contact__monomath">
        </div>
    </main>
</body>

</html>