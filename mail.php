<?php
$to = "contacto@rybconsultora.com"; // Cambia esto por tu correo
$subject = "Prueba de envío de correo";
$message = "Este es un mensaje de prueba.";
$headers = "From: victor.paez.1clsf@gmail.com";

if(mail($to, $subject, $message, $headers)) {
    echo "Correo enviado correctamente.";
} else {
    echo "Hubo un error al enviar el correo.";
}
?>
