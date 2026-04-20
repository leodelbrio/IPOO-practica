<?php

$arrays = [1, 2 ,3];

list ($a, $b, $c) = $arrays;

echo $b . "\n";

$numeros = range(10, 20);
echo $numeros[5] . "\n";

$nombres = ["leo", "luca", "manuel"];

unset($nombres[0]);

if (in_array( "leo", $nombres)) {
    echo "si esta!" . "\n";
}else{
    echo "no, no esta" . "\n";
};



?>