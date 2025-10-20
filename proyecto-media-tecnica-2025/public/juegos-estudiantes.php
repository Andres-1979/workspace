<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
$usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Juegos Matemáticos</title>
    <link rel="stylesheet" href="../assets/css/juegos.css">

</head>

<body>
    <!-- Header -->
    <header class="header">
        <h2>MatematicasDivertidas - juegos</h2>
        <nav>
            <ul>
                <li><a href="dashboard_estudiante.php">Inicio</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <!-- Controles -->
        <div class="controls">
            <select id="categoria" onchange="filtrarJuegos()">
                <option value="todos">Todas las categorías</option>
                <option value="operaciones">Operaciones Básicas</option>
                <option value="geometria">Geometría</option>
                <option value="fracciones">Fracciones</option>
            </select>

            <input type="text" id="buscador" placeholder="Buscar juego..." onkeyup="buscarJuegos()">
        </div>

        <!-- Grid de juegos -->
        <!-- 🎮 Cards de Juegos -->
        <section id="gamesContainer" class="grid-container">

            <!-- Ejemplo 1 -->
            <div class="card operaciones">
                <img src="../assets/img/sumMaster.png" alt="Juego de Suma">
                <h3>Juego de Sumas</h3>
                <p>Practica sumas de manera divertida.</p>
                <a href="https://www.coolmathgames.com/0-sum-master" target="_blank" class="btn">Jugar ahora</a>
            </div>

            <!-- Ejemplo 2 -->
            <div class="card geometria">
                <img src="assets/images/juego-geometria.jpg" alt="Juego de Geometría">
                <h3>Juego de Geometría</h3>
                <p>Refuerza tus conocimientos de figuras geométricas.</p>
                <a href="https://www.coolmathgames.com/0-geometry-tower" target="_blank" class="btn">Jugar ahora</a>
            </div>

            <!-- Ejemplo 3 -->
            <div class="card fracciones">
                <img src="assets/images/juego-fracciones.jpg" alt="Juego de Fracciones">
                <h3>Juego de Fracciones</h3>
                <p>Aprende a comparar y simplificar fracciones.</p>
                <a href="https://www.mathplayground.com/fraction_forest_part1.html" target="_blank" class="btn">Jugar
                    ahora</a>
            </div>
        </section>

        <a href="dashboard_student.php" class="back">⬅ Volver al Dashboard</a>
    </div>

    <script src="../assets/js/juegos.js"></script>
</body>

</html>