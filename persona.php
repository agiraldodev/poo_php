<?php

class Persona {

    // Atributos
    private $nombre;
    private $edad;

    private $telefono;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function mostrarInformacionAlumno() {
        echo "Nombre: {$this->nombre}, Edad: {$this->edad} años";
    }
}

// Crear una instancia de la clase Persona
$alumno1 = new Persona("Victor", 14);
$alumno2 = new Persona("Julián", 16); 

echo $alumno1 -> getNombre();
echo "<br/>";
$alumno1 -> setNombre("Juan");
echo $alumno1 -> getNombre();

echo "<br/>";

//$alumno2 -> setEdad(18);
echo $alumno2 -> getEdad();

//$alumno1->mostrarInformacionAlumno();

/*
echo $alumno1->obtenerNombre();// Llama al método obtenerNombre()
echo $alumno1->obtenerEdad();
echo $alumno2->obtenerEdad();
*/