<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $to = 'torresbarretoluisdavid@gmail.com'; // Reemplaza con tu dirección de correo electrónico
  $subject = 'Nuevo mensaje del formulario de contacto';
  $body = "Nombre: $name\n\nEmail: $email\n\nMensaje: $message";
  
  $headers = "From: $name <$email>";
  
  if (mail($to, $subject, $body, $headers)) {
    echo 'Mensaje enviado con éxito. Gracias por contactarnos.';
  } else {
    echo 'Hubo un problema al enviar el mensaje. Por favor, inténtalo nuevamente.';
  }
}
?>