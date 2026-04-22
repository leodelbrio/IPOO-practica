<?php
include 'Auto.php';


$unaPersona=new Persona("Claudia", "Carrasco" , 12312312);
$otraPersona=new Persona("Lucas", "Perez", 33333);


$miAuto= new Auto("Toyota", "Yaris", 2025, "negro", "ASDSSEE", 4,
            "123123123123", 50, 50, 1000, 0.10, $unaPersona);

$elAutodeLucas= new Auto("Fiat", "Palio", 2023, "blanco", "ASDSSEE", 4,
            "123123123123", 50, 60, 5000, 0.10, $otraPersona);

$miAuto->recorrerDistancia(50);
$elAutodeLucas->recorrerDistancia(100);


$kmRecorridosClau=$miAuto->getKmRecorridos();
$kmRecorridosLucas=$elAutodeLucas->getKmRecorridos();

echo $miAuto->toString();
echo  "El dueño es: " . $miAuto->getDuenio()->toString()."\n";
echo "El auto de Clau tiene: " . $miAuto->getNivelDelTanque() . " litros en el tanque\n";

echo $elAutodeLucas->toString();
echo  "El dueño es: " . $elAutodeLucas->getDuenio()->toString()."\n";
echo "El auto de Lucas tiene: " . $elAutodeLucas->getNivelDelTanque() . " litros en el tanque\n";

