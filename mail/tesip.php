<?php

ini_set( 'allow_url_fopen', 'On');
#$ip     =  '190.76.127.210';

$ip        = $_SERVER['REMOTE_ADDR'];
#$equipo     = $_SERVER['REMOTE_HOST'];
$meta       = (unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip={$ip}")));
$pais       = $meta["geoplugin_countryName"] ;
$ciudad     = $meta["geoplugin_timezone"];

echo var_dump($meta);
