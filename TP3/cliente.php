<?php

include_once 'persona.php';

class Cliente extends Persona {
    private $nroCliente;

    public function __construct($elNroCliente, $elNombre, $elApellido, $elDni){
        parent::__construct($elNombre, $elApellido, $elDni);
        $this->nroCliente=$elNroCliente;
    }

    public function toString(){
        return parent::toString();
    }

    public function getNroCliente(){
        return $this->nroCliente;
    }

    /* abstrac class Siempre que usas polimorfismo es abstracto*/
    

}