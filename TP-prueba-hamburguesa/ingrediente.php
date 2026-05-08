<?php 

include 'TP-prueba-hamburguesa/hamburguesa.php';

class Ingrediente 
{
    private $nombre;
    private $calorias;

    public function __construct($elNombre, $lasCalorias)
    {
        $this->nombre=$elNombre;
        $this->calorias=$lasCalorias;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getCalorias(){
        return $this->calorias;
    }

    public function setNombre(){
        $this->nombre;
    }

    public function setCaloriass(){
        $this->calorias;
    }


}
