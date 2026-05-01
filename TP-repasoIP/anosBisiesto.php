<?php

echo "Ingrese un anio: ";
$anio = trim(fgets(STDIN));

if ($anio % 4 == 0) {
    if ($anio % 100 == 0) {
        if ($anio % 400 == 0) {
            $a = $anio;
            while ($a >= 0) {
                echo $anio . "\n";
                $a = $a - 4;
                $anio = $anio - 4;
        };
        }else {
            echo "no oh";
        };
    }else{
        $a = $anio;
        while ($a >= 0) {
            echo $anio . "\n";
            $a = $a - 4;
            $anio = $anio - 4;
        };
    };
}else {
    echo "nao noa". "\n";
};
?>