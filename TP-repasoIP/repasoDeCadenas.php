<?php

$cadenaDeTexto = "Leonardo.delBrio";

echo strlen($cadenaDeTexto) . "\n";

//1. Dada una cadena de caracteres terminada en punto retornar la cantidad de letras que contiene la cadena.

$cadenaLetrasPunto = "hola.";
$primerCont = 0;
for ($i = 0; $i < strlen($cadenaLetrasPunto); $i++){
    if (ctype_alpha($cadenaLetrasPunto[$i]))
    $primerCont = $primerCont + 1;
};

echo $primerCont;

echo "\n";

$cadenaPruebaPunto = "Hola mundo.";
$contadorCadenaPrueba = 0;
for ($l = 0; $l < strlen($cadenaPruebaPunto); $l++){
    if (ctype_alpha($cadenaPruebaPunto[$l])){
        $contadorCadenaPrueba = $contadorCadenaPrueba + 1; 
    };
};
echo $contadorCadenaPrueba;

echo "\n";

//2. Dado un texto terminado en / y un caracter, determinar cuántas veces aparece ese caracter en la cadena.

$textoEnBarra = "leonardo/del/brio";
$caracterBuscado = "/";
$canDe = 0;
for ($s = 0; $s < strlen($textoEnBarra); $s++){
    if ($textoEnBarra[$s] == $caracterBuscado){
        $canDe = $canDe + 1;
        };
    };
echo $canDe;

echo "\n";

//3. Dada 2 cadenas cadena1 y cadena2 retornar verdadero si cadena2 se encuentra en cadena1 y falso en caso
//contrario.

$cadenaPizza = "pizza";
$cadenaGuiso = "guiso";
$cadenaPizza2 = "pizza";

if (str_contains($cadenaPizza, $cadenaPizza2)){
    echo "sisi piza esta";
}else{
    echo "no, no encotramos pizza";
}

echo "\n";

if (str_contains($cadenaGuiso, $cadenaPizza)){
    echo "sisi esta";
}else{
    echo "nono esta";
}

echo "\n";

//4. Dada una cadena retornar su longitud sin utilizar la función count de PHP.

$cadenaParaContar = "murcielago";
echo strlen($cadenaParaContar);

echo "\n";
$concon = 0;

for ($c = 0; $c < strlen($cadenaParaContar); $c++) { 
    $concon = $concon + 1;
    };
echo $concon;

echo "\n";

//5. Dada 2 cadenas cadena1 y cadena2 retornar la cadena de mayor longitud, invocar al método implementado
//para el inciso anterior

$concon1 = 0;
$concon2 = 0;

$animal1 = "murcielago";
$animal2 = "leon";

echo animalLargo ($animal1, $animal2, $concon1, $concon2);

function animalLargo ($an1, $an2, $conto1, $conto2){
    for ($a=0; $a < $an1; $a++) { 
        $conto1 = $conto1 + 1;
    };
    for ($b=0; $b < $an2; $b++) { 
        $conto2 = $conto2 + 1;
    };

    if ($conto1 > $conto2) {
        $final = "El animal uno es mas largo!";
    } else {
        $final = "El animal dos es mas largo!";
    };

    return $final;
    
};
?>