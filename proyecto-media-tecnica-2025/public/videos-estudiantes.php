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
    <title>Videos Educativos</title>
   <link rel="stylesheet" href="../assets/css/videos-estudiantes.css">
</head>

<body>
    <!-- Header -->
    <header class="header">
        <h2>MatematicasDivertidas - videos</h2>
        <nav>
            <ul>
                <li><a href="dashboard_estudiante.php">Inicio</a></li>
            </ul>
        </nav>
    </header>


    <div class="container">
        <!-- Controles -->
        <div class="controls">
            <select id="categoria" onchange="filtrarVideos()">
                <option value="todos">Todas las categorías</option>
                <option value="operaciones">Operaciones Básicas</option>
                <option value="geometria">Geometría 5°</option>
                <option value="fracciones">Fracciones</option>
            </select>

            <input type="text" id="buscador" placeholder="Buscar video..." onkeyup="buscarVideos()">
        </div>

        <!-- Grid de videos -->
        <div class="grid" id="videosGrid">
            <!-- Operaciones -->
            <div class="card" data-categoria="operaciones" data-titulo="Suma y Resta Básica">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/UUAtJdXpujM?si=0XWeN9jH6aFLEdfM"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <h3>Suma y Resta Básica</h3>
            </div>

            <div class="card" data-categoria="operaciones" data-titulo="Multiplicación y División Básica">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/3QPpyuNycQI?si=Xtty4FgtYlS9vT59"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <h3>Multiplicación y División Básica</h3>
            </div>

            <!-- Geometría -->
            <div class="card" data-categoria="geometria" data-titulo="Figuras Geométricas">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/E3i2ptq-G5w?si=uKcLIZ-diGDm3IMM"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <h3>Figuras Geométricas</h3>
            </div>

            <div class="card" data-categoria="geometria" data-titulo="Perímetro y Área">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/wYNvY_bOGdc?si=GVn3x9ml_lgkP7pI"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <h3>Perímetro y Área</h3>
            </div>

            <!-- Fracciones -->
            <div class="card" data-categoria="fracciones" data-titulo="Introducción a las Fracciones">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/7Xvlv3SCA4c?si=1qkRHMrQlhNFs5Vy"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <h3>Introducción a las Fracciones</h3>
            </div>

            <div class="card" data-categoria="fracciones" data-titulo="Suma de Fracciones">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/u5_ZLKbqYqM?si=DRhDCqulTOHnG-mB"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <h3>Suma de Fracciones</h3>
            </div>
        </div>

        <a href="dashboard_estudiante.php" class="back">⬅ Volver al Dashboard</a>
    </div>

    <script src="../assets/js/videos.js"></script>
</body>

</html>