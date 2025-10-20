<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

$nombre = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Estudiante - MatematicasDivertidas</title>
    <link rel="stylesheet" href="../assets/css/dashboard_estudiante.css">
</head>

<body>
    <!--================================= HEADER ================================= -->
    <header class="header">
        <h2>MatematicasDivertidas</h2>
        <nav>
            <ul>
                <li><a href="dashboard_estudiante.php">Inicio</a></li>
                <li><a href="logout.php" class="logout">Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>

    <!-- ================================= BIENVENIDA ================================= -->
    <section class="welcome">
        <h1>👋 Bienvenido, <span><?php echo htmlspecialchars($nombre); ?></span></h1>
        <p>Explora las secciones disponibles para aprender de forma divertida.</p>
    </section>

    <!--================================= Dashboard con cards =================================-->
    <div class="container-dashboard-cards">
        <section class="dashboard">
            <div class="card">
                <img src="../assets/img/videos.png" alt="Videos">
                <h3>Videos</h3>
                <a href="videos-estudiantes.php" class="btn-cards">Explorar</a>
            </div>

            <div class="card">
                <img src="../assets/img/juegos.png" alt="Juegos">
                <h3>Juegos</h3>
                <a href="juegos-estudiantes.php" class="btn-cards">Jugar</a>
            </div>

            <div class="card">
                <img src="../assets/img/notas.png" alt="Notas">
                <h3>Notas y Quizzes</h3>
                <a href="notas-estudiantes.php" class="btn-cards">Ver notas</a>
            </div>

            <div class="card">
                <img src="../assets/img/teoria.png" alt="Teoría">
                <h3>Teoría / Explicación</h3>
                <a href="teoria.php" class="btn-cards">Aprender</a>
            </div>
        </section>
    </div>
</body>

</html>