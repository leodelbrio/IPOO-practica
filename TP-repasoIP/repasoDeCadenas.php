<?php

$cadenaDeTexto = "Leonardo.delBrio";

echo strlen($cadenaDeTexto) . "\n";

//1. Dada una cadena de caracteres terminada en punto retornar la cantidad de letras que contiene la cadena.

$cadenaLetrasPunto = "hola.";
for ($i = 0; $i < strlen($cadenaLetrasPunto); $i++){
    echo $cadenaLetrasPunto[$i];
};

echo "\n";

$cadenaPruebaPunto = "Hola mundo.";
for ($l = 0; $l < strlen($cadenaPruebaPunto); $l++){
    if (ctype_alpha($cadenaPruebaPunto[$l])){
        echo strlen($cadenaPruebaPunto[$l]);
    };
};

echo "\n";

//2. Dado un texto terminado en / y un caracter, determinar cuántas veces aparece ese caracter en la cadena.

$textoEnBarra = "leonardo\del\brio";
for ($s = 0; $s < strlen($textoEnBarra); $s++){
    if (ctype_alpha($textoEnBarra[$s])){
    }else {
        $canDe = 0;
        echo $canDe;
    };
};

echo "\n";

//3. Dada 2 cadenas cadena1 y cadena2 retornar verdadero si cadena2 se encuentra en cadena1 y falso en caso
//contrario.

$cadenaPancheria = ["pizza" , "hamburguesa" , "pancho"];
$cadenaPizza = "pizza";
$cadenaGuiso = "guiso";

if (str_contains($cadenaPizza, "pizza")){
    echo "sisi piza esta";
}else{
    echo "no, no encotramos pizza";
}

echo "\n";

if (str_contains($cadenaGuiso, "pizza")){
    echo "sisi esta";
}else{
    echo "nono esta";
}

echo "\n";

//4. Dada una cadena retornar su longitud sin utilizar la función count de PHP.

$cadenaParaContar = "murcielago";
echo strlen($cadenaParaContar);

echo "\n";

for ($c = 0; $c < strlen($cadenaParaContar); $c++) { 
    echo $c;
}

echo "\n";

//5. Dada 2 cadenas cadena1 y cadena2 retornar la cadena de mayor longitud, invocar al método implementado
//para el inciso anterior

$cadena11 = "murcielago";
$cadena22 = "mur";

echo compararCadena($cadena11, $cadena22);

function compararCadena ($cad11, $cad22){
    for ($f=0; $f < strlen($cad11); $f++) { 
        $leng11 = $f;
    };
        for ($z=0; $z < strlen($cad22); $z++) { 
        $leng22 = $z;
    };

    if ($leng11 > $leng22){
        $final = "es mas larga la 1" . "\n";
    }else{
        $final = "es mas larga la 2" . "\n";
    };

    return $final;
};
?>