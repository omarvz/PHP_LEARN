<?php
$x = 5;
$y = 4;

function f(){
    global $x, $y;
    $y = $x + $y;
    echo $y . "<br/>";
}

function f2(){
    $GLOBALS['x'] = 3;
    $GLOBALS['y'] = 4;
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];

    print $GLOBALS['y']. "<br/>";
}

f();
f2();

$var = 32.43;
var_dump($var);
echo "<br/>";

$nombre = "Omar";
echo $nombre[1]. "<br/>";
echo strlen($nombre). "<br/>";
var_dump(is_int($x));
echo "<br/>";
echo PHP_FLOAT_MAX . "<br/>";

$var2 = "3245.43";
echo (int)$var2;
?>
