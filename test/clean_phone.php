<?php
$has_ws     = 'S';
$phone_ws   = '';
$phone = '0426-5302318';

if ($has_ws == 'S'){
    $phone_ws = substr($phone, 1);
    $phone_ws = str_replace('-', '', $phone_ws);
    $phone_ws = '58'.$phone_ws;
    #$html_ws
}
echo $phone_ws;

