<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "contacto@rybconsultora.com"; // Cambia esto por tu dirección de correo
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $fullMessage = "Nombre: $name\n";
    $fullMessage .= "Correo: $email\n";
    $fullMessage .= "Asunto: $subject\n";
    $fullMessage .= "Mensaje:\n$message\n";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
}
?>
