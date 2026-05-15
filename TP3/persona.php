<?php 

class Persona {
    private $nombre;
    private $apellido;
    private $dni;
    
    public function __construct($elNombre, $elApellido, $elDni){
        $this->nombre = $elNombre;
        $this->apellido = $elApellido;
        $this->dni = $elDni;
    }

    plubic function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getDni(){
        return $this->dni;
    }
};


