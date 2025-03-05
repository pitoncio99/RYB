<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validación y sanitización de datos
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Validar si el email tiene un formato correcto
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script type='text/javascript'>
                window.onload = function() {
                    alert('Correo electrónico no válido.');
                };
              </script>";
        exit;
    }

    // Dirección de destino del correo
    $to = "contacto@rybconsultora.com";  // Cambia esto por tu dirección de correo
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // El mensaje completo que se enviará
    $fullMessage = "Nombre: $name\n";
    $fullMessage .= "Correo: $email\n";
    $fullMessage .= "Asunto: $subject\n";
    $fullMessage .= "Mensaje:\n$message\n";

    // Enviar el correo
    if (mail($to, $subject, $fullMessage, $headers)) {
        // Si el correo se envió con éxito, muestra la notificación con alert() y redirige
        echo "<script type='text/javascript'>
                window.onload = function() {
                    alert('Mensaje enviado correctamente.');
                    setTimeout(function(){
                        window.location.href = 'index.html'; // Redirige al index después de 3 segundos
                    }, 100); // Espera 3 segundos antes de redirigir
                };
              </script>";
    } else {
        // Si el correo no se envió, muestra una notificación de error con alert()
        echo "<script type='text/javascript'>
                window.onload = function() {
                    alert('Hubo un error al enviar el mensaje.');
                };
              </script>";
    }
}
?>
