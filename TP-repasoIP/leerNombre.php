<?php

$cantidadDeNombres = 5;

print_r (decirNombres($cantidadDeNombres));

function decirNombres ($n) {
    $nombres = [];

    for ($i=0; $i < $n; $i++) { 
        $nom = trim(readline("Ingresa un nombre: "));
        $nombres [] = $nom;
    };

    return $nombres;
};



?>