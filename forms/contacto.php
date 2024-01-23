<?php
// Recibir datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Dirección de correo a la que se enviará el mensaje
$to = 's.villarroelp2@gmail.com';

// Construir el mensaje
$message_body = "Nombre: $name\n";
$message_body .= "Email: $email\n";
$message_body .= "Asunto: $subject\n\n";
$message_body .= "Mensaje:\n$message";

// Encabezados del correo
$headers = "From: $email\n";
$headers .= "Reply-To: $email\n";

// Enviar el correo
$mail_success = mail($to, $subject, $message_body, $headers);

// Comprobar si el correo se envió correctamente
if ($mail_success) {
    echo 'success';
} else {
    echo 'error';
}
?>