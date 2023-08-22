<?php

define("CARS", [
    "Alfa Romero",
    "Toyota"
]);

echo CARS[0]. "<br/>";

//Iterar arreglos
foreach (CARS as $value) {
    echo "$value <br/>";
}

# Iterar diccionario
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
    echo "$x = $val<br>";
}

?>