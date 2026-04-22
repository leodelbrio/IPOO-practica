<?php
include 'Persona.php';
/*Atributos:marca
	modelo
	año
	color
patente
cantidaddepuertas
nrodechasis
capacidaddeltanque
niveldeltanque
kmrecorridos
*/

/*comportamiento: Comportamiento:
	getMarca()
	getModelo()
	setMarca()
	setModelo()
	arrancar()
	moverse()
	acelerar()
	frenar()
	cargarcombustible()
    */

    class Auto {
        /*Atributos - Estado del objeto*/
        private $marca;
	    private $modelo;
	    private $anio;
	    private $color;
        private $patente;
        private $cantidadPuertas;
        private $nroChasis;
        private $capacidadTanque;
        private $nivelDelTanque;
        private $kmRecorridos;
        private $ltsxkm;
        private $duenio;

        /*Comportamiento*/

        /* Método constructor */
        public function __construct($laMarca, $elModelo, $elAnio, $elColor, $laPatente, $lacantidadPuertas,
            $elNroChasis, $laCapacidaddelTanque, $elNivelDelTanque, $losKm, $losLtsxKm, $elduenio)
        {
            $this->marca=$laMarca ;
            $this->modelo=$elModelo;
            $this->anio=$elAnio;
            $this->color=$elColor;
            $this->patente=$laPatente;
            $this->cantidadPuertas=$lacantidadPuertas;
            $this->nroChasis=$elNroChasis;
            $this->capacidadTanque=$laCapacidaddelTanque;
            $this->nivelDelTanque=$elNivelDelTanque;
            $this->kmRecorridos=$losKm;
            $this->ltsxkm=$losLtsxKm;
            $this->duenio=$elduenio;

        }

        public function toString()
        {
            return "El auto es: ". $this->getMarca() . " Modelo: ". $this->getModelo() . " " . $this->anio . " y tiene " . $this->getKmRecorridos() . " km recorridos.";
        }

        public function getDuenio()
        {
            return $this->duenio;
        }

        public function getMarca()
        {
            return $this->marca;
        }

        public function getModelo()
        {
            return $this->modelo;
        }

        public function getNivelDelTanque()
        {
            return $this->nivelDelTanque;
        }

        public function getKmRecorridos()
        {
            return $this->kmRecorridos;
        }

        public function cargarCombustible($litros)
        {
            if ($this->nivelDelTanque + $litros > $this->capacidadTanque)
                $cargaExitosa= false;
            else
            {
                $this->nivelDelTanque = $this->nivelDelTanque + $litros;
                $cargaExitosa= true;
            }
            return $cargaExitosa;
        }

        public function recorrerDistancia ($distancia)
        {
            $this->kmRecorridos=   $this->kmRecorridos + $distancia;
            $this->nivelDelTanque= $this->nivelDelTanque - ($distancia * $this->ltsxkm);
        }



    }



