<?php

class Persona
{

    private $nombre;
    private $dni;
    private $apellido;

    public function __construct($elNombre, $elApellido, $eldni)
    {
        $this->nombre=$elNombre;
        $this->apellido=$elApellido;
        $this->dni=$eldni;
        
    }

    public function toString()
    {
         return  $this->apellido . ", ". $this->nombre . " , DNI: "  . $this->dni;
 
    }

}