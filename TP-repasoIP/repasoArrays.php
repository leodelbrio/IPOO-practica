<?php

$A = [2, 4, 6, 8, 10, 12];
$B = [1, 3, 6, 9, 12, 15];

$C = array_diff($A, $B);

echo "Con repetidas" . print_r($C) . "\n";

$D = [1, 3, 6, 9, 12, 15, 20];
$E = [1, 3, 6, 9, 12, 15];

$F = array_diff($D, $E);

echo "cadena sin repetidos" . print_r($F) . "\n";

?>

