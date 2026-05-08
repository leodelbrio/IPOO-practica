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










    Te propongo modelarlo con dos clases: Ingrediente y Hamburguesa.

La delegación se da porque la hamburguesa no calcula las calorías directamente sobre sus atributos, sino que le pide a cada ingrediente sus calorías y las suma.
1. Clase Ingrediente
php

class Ingrediente {
    private $nombre;
    private $calorias;

    public function __construct($nombre, $calorias) {
        $this->nombre = $nombre;
        $this->calorias = $calorias;
    }

    // Getters
    public function getNombre() {
        return $this->nombre;
    }

    public function getCalorias() {
        return $this->calorias;
    }

    // Setters
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setCalorias($calorias) {
        $this->calorias = $calorias;
    }
}

2. Clase Hamburguesa
php

class Hamburguesa {
    private $ingredientes = [];  // Array de objetos Ingrediente

    public function agregarIngrediente(Ingrediente $ingrediente) {
        $this->ingredientes[] = $ingrediente;
    }

    // Getters y Setters para ingredientes (opcional si quieres manipular la lista completa)
    public function getIngredientes() {
        return $this->ingredientes;
    }

    public function setIngredientes($ingredientes) {
        $this->ingredientes = $ingredientes;
    }

    // Método que usa delegación
    public function calcularCalorias() {
        $total = 0;
        foreach ($this->ingredientes as $ingrediente) {
            // Delegación: cada ingrediente sabe sus calorías
            $total += $ingrediente->getCalorias();
        }
        return $total;
    }
}

3. Ejemplo de uso
php

$pan = new Ingrediente("Pan", 150);
$carne = new Ingrediente("Carne", 250);
$queso = new Ingrediente("Queso", 100);

$hamburguesa = new Hamburguesa();
$hamburguesa->agregarIngrediente($pan);
$hamburguesa->agregarIngrediente($carne);
$hamburguesa->agregarIngrediente($queso);

echo $hamburguesa->calcularCalorias(); // 500

¿Dónde está la delegación?

En calcularCalorias(), la hamburguesa no accede a $calorias directamente (no tiene atributo calorias propio), sino que delega en cada Ingrediente la responsabilidad de devolver sus calorías mediante getCalorias().
podes agregar por favor setters y getters?

En el código anterior ya incluí los getters y setters para ambas clases, pero voy a escribirlos nuevamente de forma más completa y explícita para que se vea claro.
Clase Ingrediente (con todos sus getters y setters)
php

class Ingrediente {
    private $nombre;
    private $calorias;

    // Constructor
    public function __construct($nombre, $calorias) {
        $this->nombre = $nombre;
        $this->calorias = $calorias;
    }

    // Getters
    public function getNombre() {
        return $this->nombre;
    }

    public function getCalorias() {
        return $this->calorias;
    }

    // Setters
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setCalorias($calorias) {
        $this->calorias = $calorias;
    }
}

Clase Hamburguesa (con todos sus getters y setters)
php

class Hamburguesa {
    private $ingredientes = [];

    // Constructor (opcional, puede iniciar sin ingredientes)
    public function __construct($ingredientes = []) {
        $this->ingredientes = $ingredientes;
    }

    // Método específico para agregar un ingrediente
    public function agregarIngrediente(Ingrediente $ingrediente) {
        $this->ingredientes[] = $ingrediente;
    }

    // Getter para ingredientes
    public function getIngredientes() {
        return $this->ingredientes;
    }

    // Setter para ingredientes (reemplaza toda la lista)
    public function setIngredientes($ingredientes) {
        $this->ingredientes = $ingredientes;
    }

    // Método que calcula las calorías totales por delegación
    public function calcularCalorias() {
        $total = 0;
        foreach ($this->ingredientes as $ingrediente) {
            // Delegación: cada ingrediente devuelve sus propias calorías
            $total += $ingrediente->getCalorias();
        }
        return $total;
    }
}

Ejemplo de uso con getters y setters
php

// Crear ingredientes
$pan = new Ingrediente("Pan", 150);
$carne = new Ingrediente("Carne", 250);
$queso = new Ingrediente("Queso", 100);

// Usar setters para modificar valores
$pan->setCalorias(160);  // Cambio de 150 a 160
$carne->setNombre("Carne de res");

// Crear hamburguesa
$hamburguesa = new Hamburguesa();
$hamburguesa->agregarIngrediente($pan);
$hamburguesa->agregarIngrediente($carne);
$hamburguesa->agregarIngrediente($queso);

// Usar getters
echo "Ingredientes de la hamburguesa:\n";
foreach ($hamburguesa->getIngredientes() as $ing) {
    echo "- " . $ing->getNombre() . ": " . $ing->getCalorias() . " calorías\n";
}

// Calcular total por delegación
echo "\nTotal de calorías: " . $hamburguesa->calcularCalorias() . "\n";

// Usar setter para reemplazar todos los ingredientes
$nuevosIngredientes = [new Ingrediente("Lechuga", 5), new Ingrediente("Tomate", 10)];
$hamburguesa->setIngredientes($nuevosIngredientes);

echo "\nNuevo total: " . $hamburguesa->calcularCalorias() . "\n";

Resumen de getters y setters incluidos
Clase	Getters	Setters
Ingrediente	getNombre(), getCalorias()	setNombre(), setCalorias()
Hamburguesa	getIngredientes()	setIngredientes()

Además, Hamburguesa tiene el método agregarIngrediente() como método auxiliar (no es estrictamente un setter, pero facilita la construcción).

