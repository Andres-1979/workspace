<?php
include("../db/conexion.php");

$mensaje = ""; // Variable para mostrar mensajes en pantalla

if (isset($_POST['registro'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $rol = $_POST['rol'];

    $sql = "INSERT INTO usuarios (nombre, email, password, rol) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error en la consulta: " . $conn->error);
    }

    $stmt->bind_param("ssss", $nombre, $email, $password, $rol);

    if ($stmt->execute()) {
        $mensaje = "<div class='mensaje-exito'>🎉 ¡Felicidades $nombre! Tu cuenta fue creada con éxito. <a href='login.php' class='loginMensaje'>Inicia sesión aquí</a></div>";
    } else {
        $mensaje = "<div class='mensaje-error'>❌ Error al registrar: " . $stmt->error . "</div>";
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Matemáticas Divertidas</title>
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body class="auth-body">

    <div class="auth-container">
        <div class="auth-box">
            <h2>Registrarse</h2>
             <?php if (!empty($mensaje)) echo $mensaje; ?>
            <form method="POST">
                <input type="text" name="nombre" placeholder="Nombre completo" required>
                <input type="email" name="email" placeholder="Correo" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <select name="rol">
                    <option value="estudiante">Estudiante</option>
                    <option value="admin">Administrador</option>
                </select>
                <button type="submit" name="registro">Registrarse</button>
            </form>
            <p class="switch-auth">¿Ya tienes cuenta? 
                <a href="login.php">Inicia sesión aquí</a>
            </p>
        </div>
    </div>

</body>
</html>
