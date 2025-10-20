<?php
session_start();
include("../db/conexion.php");

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();

        if (password_verify($password, $usuario['password'])) {
            $_SESSION['usuario'] = $usuario['nombre'];
            $_SESSION['rol'] = $usuario['rol'];

            if ($usuario['rol'] === "admin") {
                header("Location: dashboard_admin.php");
            } else {
                header("Location: dashboard_estudiante.php");
            }
            exit();
        } else {
            echo "<script>alert('Contraseña incorrecta.');</script>";
        }
    } else {
        echo "<script>alert('Usuario no encontrado.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Matemáticas Divertidas</title>
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body class="auth-body">

    <div class="auth-container">
        <div class="auth-box">
            <h2>Iniciar Sesión</h2>
            <form method="POST">
                <label for="">correo: </label>
                <input type="email" name="email" placeholder="Correo" required>
                <label for="">contraseña:  </label>
                <input type="password" name="password" placeholder="Contraseña" required>
                <button type="submit" name="login">Entrar</button>
            </form>
            <p class="switch-auth">¿No tienes cuenta? 
                <a href="register.php">Regístrate aquí</a>
            </p>
        </div>
    </div>

</body>
</html>
