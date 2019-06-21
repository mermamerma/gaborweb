<?php
include_once '../inc/class.phpmailer.php';
include_once '../inc/class.smtp.php';
$mail = new phpmailer();
$mail->isSMTP();

$mail->Host = "mail.gabor.com.ve";
$mail->SMTPAuth = true;
$mail->Port = 110;
$mail->Username = 'info@gabor.com.ve';
$mail->Password = 'Jesusgabriel2010';
 
$mail->From="info@gabor.com.ve";
$mail->FromName="nombre del Origen";
$mail->Sender="info@gabor.com.ve";
#$mail->AddReplyTo("replies@midominio.com", "Responder a....");
$mail->AddAddress('info@gabor.com.ve');
  
$mail->Subject = "Titulo del Correo";
 
$mail->IsHTML(true);
#$mail->AddEmbeddedImage('logo.jpg', 'logoimg', 'logo.jpg'); // Adjuntar imagenes, recuerda colocar la ruta absoluta de la imagen donde esta almacenada en su servidor.
$mail->Body = "<h1>CONTENIDO HTML DE MI CORREO</h1>
    <p>Esto es una imagen: <img src=\"cid:logoimg\" /></p>";
$mail->AltBody="CONTENIDO ALTERNATIVO EN Texto Plano";

if(!$mail->Send()){
   echo "Error sending: " . $mail->ErrorInfo;;
}else{
   echo "Correo eni is sent";
}
      
/**
 * PHPMailer: Ejemplo de envío de email simple.
 

 * 
 */