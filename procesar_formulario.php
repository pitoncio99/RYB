<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $destinatario = "contacto@rybconsultora.com"; 
        $asunto = "Nueva suscripción";
        $mensaje = "El usuario con el correo: $email se ha suscrito.";
        $headers = "From: noreply@rybconsultora.com\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        if (mail($destinatario, $asunto, $mensaje, $headers)) {
            echo "<script>
                alert('¡Suscripción realizada con éxito!');
                setTimeout(function() {
                    window.location.href = 'index.html';
                }, 1000);
            </script>";
        } else {
            echo "<script>alert('Error al enviar el correo. Inténtalo de nuevo.');</script>";
        }
    } else {
        echo "<script>alert('Correo inválido. Por favor ingresa un correo válido.');</script>";
    }
} else {
    echo "<script>alert('Acceso no permitido.');</script>";
}
?>
