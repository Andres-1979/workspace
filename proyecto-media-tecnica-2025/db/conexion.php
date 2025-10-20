<?php
// db/conexion.php
$host = "localhost";
$user = "root";
$pass = "";           // ajusta si usas contraseña
$dbname = "matematicasdivertidas";

$conn = new mysqli($host, $user, $pass, $dbname);
$conn->set_charset("utf8mb4");

if ($conn->connect_error) {
    // En desarrollo: mostrar error. En producción: registrar y mostrar mensaje genérico.
    die("Error de conexión: " . $conn->connect_error);
}
?>
