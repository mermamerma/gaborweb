<?php


$ip         =  '190.76.127.210';	
$meta = (unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip={$ip}")));
var_dump($meta);
