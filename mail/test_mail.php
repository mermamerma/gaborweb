
<?php
$correo = "info@gabor.com.ve";
$nombre = "Pepe Trueno" ;
$telefono = "0426-5302318" ;
$mensaje = "Esto es una prueba de correo" ;

$to= "info@gabor.com.ve";
$subject = 'Informacion: '.$nombre;
$message = "test";
$headers = 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= "From: $correo\r\n" .

	'Reply-To:'.$correo."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	$resultado=mail($to, $subject, $message);
	 if($resultado)
            echo "Correo enviado correctamente";
        else 
            die ('No se envio el correo');
	 
?>