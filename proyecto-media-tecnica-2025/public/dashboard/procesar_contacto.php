<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Aquí puedes guardar en la base de datos o enviar un correo
    // mail("tu_correo@ejemplo.com", "Nuevo mensaje de contacto", $mensaje);

    echo "✅ Mensaje enviado correctamente";
}
?>
