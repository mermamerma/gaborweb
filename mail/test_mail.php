
<?php
$correo = "info@gabor.com.ve";
$from   = "noreplay@gabor.com.ve";
$nombre = "Pepe Trueno" ;
$telefono = "0426-5302318" ;
$mensaje = "Esto es una prueba de correo" ;

$to= "info@gabor.com.ve";
$subject = 'Contacto Web: '.$nombre;
$message = "";
$headers = 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= "From: $correo\r\n" .'Reply-To:'.$correo."\r\n" .'X-Mailer: PHP/' . phpversion();

$message = '
<html>
<head>
  <title>Recordatorio de cumpleaños para Agosto</title>
</head>
<body>
  <p>¡Estos son los cumpleaños para Agosto!</p>
  <table>
    <tr>
      <th>Quien</th><th>Día</th><th>Mes</th><th>Año</th>
    </tr>
    <tr>
      <td>Joe</td><td>3</td><td>Agosto</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17</td><td>Agosto</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';        

	$resultado=mail($to, $subject, $message, $headers);
	 if($resultado)
            die ("Correo enviado correctamente @ ".date("d-M-Y H:i:s"));
        else 
            die ('No se envio el correo');
	 
?>