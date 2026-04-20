<?php

echo "Ingrese un numero: " . "\n";
$num = trim(fgets(STDIN));
echo "Ingrese otro numero" . "\n";
$otroNum = trim(fgets(STDIN));

if (esDivisible($num, $otroNum) == true){
    echo "Es divisible capo" . "\n";
}else{
    echo "No son divisibles capo" . "\n";
}

function esDivisible ($num1, $num2){
    $resultado = $num1 % $num2;
    if ($resultado == 0){
        $resultado = true;
    }else{
        $resultado = false;
    };
    return $resultado;
};

echo "su factrial es: " . factorizar($num) . "\n";

function factorizar ($numero){
    $resultado =  1;
    if ($numero >= 1) {
        for ($i=1; $i <= $numero; $i++) { 
            $resultado *= $i;
        };
    } else {
        $resultado = "nu uh" . "\n";
    }
    return $resultado;
};

if (esPar($num) == true) {
    echo "Es par" . "\n";
} else {
    echo "Mucha suerte maquina no es par" . "\n";
};

function esPar($numerito) {
    $var = $numerito % 2; 
    if ($var == 0){
        $var = true;
    }else {
        $var = false; 
    };
    return $var;
};

$cadenaNumero = [1, 5, 10, 15, 20];
$numeroMasBajo = min($cadenaNumero);
$posMasBajo = array_search($numeroMasBajo, $cadenaNumero);
$numeroMasAlto = max($cadenaNumero);
$posMasAlto = array_search($numeroMasAlto, $cadenaNumero);
echo "El numero mas bajo es: " . $numeroMasBajo . " Y su posicion es: " . $posMasBajo .  " Y es mas eslto es: " . $numeroMasAlto . " Y su posicion es: " . $posMasAlto . "\n";
?>