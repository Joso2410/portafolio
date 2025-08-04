<?php
session_start(); // ← ¡muy importante!

// Incluye PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/Exception.php';

// Verifica si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP de Gmail
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        // TU CORREO GMAIL Y CONTRASEÑA (ver recomendaciones abajo)
        $mail->Username = 'blackmagicoficial53@gmail.com'; 
        $mail->Password = 'iuyi vgmk ckoi efty'; 

        $mail->SMTPSecure = 'tls'; // o 'ssl'
        $mail->Port = 587; // 465 para ssl

        // Remitente y destinatario
        $mail->setFrom($correo, $nombre); // el correo del visitante
        $mail->addAddress('blackmagicoficial53@gmail.com', 'Admin'); // donde recibes el mensaje

        // Contenido del correo
        $mail->isHTML(false);
        $mail->Subject = 'Nuevo mensaje de contacto';
        $mail->Body = "Nombre: $nombre\nCorreo: $correo\nMensaje:\n$mensaje";

        $mail->send();
        
        // ✅ Mensaje de éxito
        $_SESSION['mensaje_exito'] = "Gracias por contactarme $nombre 😁, eh recibido tu mensaje con éxito. Estare revisando tu mensaje con atención, valoro tu tiempo y confianza. Estare en contacto contigo muy pronto ! 👋 ";


        // ✅ Redirige a index.php después de enviar
        header("Location: ../index.php");
        exit; // <-- importante para detener la ejecución

    } catch (Exception $e) {
        echo "Error al enviar el mensaje. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
