<?php

#ini_set( 'allow_url_fopen', 1 );
$ip     =  '190.76.127.210';

#$ip        = $_SERVER['REMOTE_ADDR'];
#$equipo     = $_SERVER['REMOTE_HOST'];
$meta       = (unserialize(@file_get_contents("http://www.geoplugin.net/php.gp?ip={$ip}")));
$pais       = @$meta["geoplugin_countryName"] ;
$ciudad     = @$meta["geoplugin_timezone"];

#
var_dump($meta);

$userInfo   = $_SERVER['HTTP_USER_AGENT'];

$html = <<< EOT
<table width="46%" height="194" border="0">
  <tr>
    <td colspan="2" bgcolor="#0ea45d" style=""><div align="center"><span style="color: #FFFFFF;	font-weight: bold;">Información de Contácto desde</span> 
	<a href="gabor.com.ve" style="background-color:#FFFFFF">gabor.com.ve</a> </div></td>
  </tr>
  <tr>
    <td width="40%"><strong>Nombres:</strong></td>
    <td width="60%">&nbsp;</td>
  </tr>
  <tr bgcolor="#F3F3F3">
    <td><strong>Correo:</strong></td>
    <td><a href="mailto:name@email.com">name@email.com</a></td>
  </tr>
  <tr>
    <td><strong>Teléfono Local:</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#F3F3F3">
    <td><strong>Teléfono Celuar: </strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>WhatsApp: </strong></td>
    <td><span style="color: #FF0000;	font-weight: bold; font-size:16px">NO</span> - <span >
	<a href="https://wa.me/584265302318/?text=%20Saudos%20Nombe" style="color: #00CC00;	font-weight: bold; font-size:16px">SI</a></span> </td>
  </tr>
  <tr bgcolor="#F3F3F3">
    <td><strong>Ubicación:</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Host Info: </strong></td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td colspan="2"><div align="center"><strong>Mensaje</strong></div></td>
  </tr>
  <tr>
    <td colspan="2">dfdfdsfdsfdsfdsfds</td>
  </tr>
</table>
        
EOT;

echo $html;