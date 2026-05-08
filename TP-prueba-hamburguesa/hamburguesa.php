<?php

include 'TP-prueba-hamburguesa/ingrediente.php';

class Hamburguesa {
    private $ingredientes = [];

    public function agregarIngrediente($elIngrediente){
        $this->ingredientes[] = $elIngrediente;
    }

    public function contarCalorias(){
        $final = 0;
        foreach ($this->ingredientes as $ingrediente) {
            $lasCalorias= $ingrediente -> getCalorias();
            $final += $lasCalorias;
        }

        return $final;
    }

    
}