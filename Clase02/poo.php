<?php
// BAESE DE PROGRAMACION ORIENTADA A OBJETOS

class Persona{

    // La clase siempre tiene que iniciar en mayuscula
    // Declarar las cariables que utilizará la clase

    public $nombre;
    public $apellido;
    public $edad;

    // inicializar el constructor
    // iniciar las variables (atributos) de la clase para que puedan ser utilizadas en el momento de realizar una instancia

    public function __construct($nombre, $apellido, $edad){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    // Un metodo es una función propia de una clase

    public function saludar(){
        echo "Hola, soy $this->nombre $this->apellido y tengo $this->edad años";
    }

}

// Se realiza la instancia con el nombre de la clase en minuscula

$persona = new Persona('Carlos', 'Nieto', '24');

$persona->saludar();

?>