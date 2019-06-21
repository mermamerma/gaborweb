<?php
// Check for empty fields




$name       = 'jesus rodriguez';
$email      = 'mermamerma@gmail.com';
$phone      = '0244-3218191';
$celular    = '0426-5302318';
$has_ws     = 'SI';
$message    = 'Verga que hueso más grande depurar apps';

# User Info IP
$ip         = $_SERVER['REMOTE_ADDR'];
$userInfo   = $_SERVER['HTTP_USER_AGENT'];
$meta       = (unserialize(@file_get_contents("http://www.geoplugin.net/php.gp?ip={$ip}")));
$pais       = @$meta["geoplugin_countryName"] ;
$ciudad     = @$meta["geoplugin_timezone"];
#Info from mail
$to         = "info@gabor.com.ve";
$from       = "web@gabor.com.ve";
$reply      = "noreplay@gabor.com.ve";
$from       = 'Gabor Web';
$subject    = 'Contacto Web';
$headers    = 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= "From: $from\r\n" .'Reply-To:'.$reply."\r\n" .'X-Mailer: PHP/' . phpversion();

$body = <<< EOT
<table width="46%" height="194" border="0">
  <tr>
    <td colspan="2" bgcolor="#0ea45d" style=""><div align="center"><span style="color: #FFFFFF;	font-weight: bold;">Información de Contácto desde</span> 
	<a href="gabor.com.ve" style="background-color:#FFFFFF">gabor.com.ve</a> </div></td>
  </tr>
  <tr>
    <td width="40%"><strong>Nombres:</strong></td>
    <td width="60%">{$name}</td>
  </tr>
  <tr bgcolor="#F3F3F3">
    <td><strong>Correo:</strong></td>
    <td><a href="mailto:{$email}">{$email}</a></td>
  </tr>
  <tr>
    <td><strong>Teléfono Local:</strong></td>
    <td>{$phone}</td>
  </tr>
  <tr bgcolor="#F3F3F3">
    <td><strong>Teléfono Celuar: </strong></td>
    <td>{$celular}</td>
  </tr>
  <tr>
    <td><strong>WhatsApp: </strong></td>
    <td><span style="color: #FF0000;	font-weight: bold; font-size:16px">NO</span> - <span >
	<a href="https://wa.me/584265302318/?text=%20Saudos%20Nombe" style="color: #00CC00;	font-weight: bold; font-size:16px">SI</a></span> </td>
  </tr>
  <tr bgcolor="#F3F3F3">
    <td><strong>Ubicación:</strong></td>
    <td>{$pais}/{$ciudad}</td>
  </tr>
  <tr>
    <td><strong>Host Info: </strong></td>
    <td>{$userInfo}</td>
  </tr>
    <tr  bgcolor="#F3F3F3">
    <td><strong>Mensaje: </strong></td>
    <td>&nbsp;</td>
  </tr>
</table>
        
EOT;

    echo $body;
    

if(!mail($to, $subject, $body, $headers)) {
    die ('No se envio el correo :-(');
    exit;
}
else {
    die ("Correo enviado correctamente @ ".date("d-M-Y H:i:s"));
}
	 

?>
