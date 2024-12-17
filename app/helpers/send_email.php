<?php

// Captura los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Configuración del correo
$destinatario = 'tu_correo@tu_dominio.com';
$asunto = 'Nuevo mensaje de contacto';
$cuerpo = "
    <h2>Nuevo mensaje de contacto</h2>
    <p><strong>Nombre:</strong> $nombre</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Mensaje:</strong> $mensaje</p>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: <$email>" . "\r\n";

// Enviar el correo
if (mail($destinatario, $asunto, $cuerpo, $headers)) {
    echo "¡Gracias por contactarnos!";
} else {
    echo "Hubo un error al enviar el mensaje.";
}
