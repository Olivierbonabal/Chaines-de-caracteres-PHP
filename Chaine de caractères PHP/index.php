<?php

$message = "0@sn9sirppa@#?ia'jgtvryko1";
$keyCode = strlen($message)/2;
$firstCode = substr($message, 5, $keyCode);
$secondCode = str_replace('@#?', ' ' , $firstCode);
$code1 = strrev($secondCode);

echo $code1;


$message = 'q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj';
$keyCode = strlen($message)/2;
$firstCode = substr($message, 5, $keyCode);
$secondCode = str_replace('@#?', ' ' , $firstCode);
$code2 = strrev($secondCode);

echo $code2;

$message = 'aopi?sgnirts@#?sedhtg+p9l!';
$keyCode = strlen($message)/2;
$firstCode = substr($message, 5, $keyCode);
$secondCode = str_replace('@#?', ' ' , $firstCode);
$code3 = strrev($secondCode);

echo $code3;
