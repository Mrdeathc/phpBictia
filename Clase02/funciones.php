<?php
    //FUNCIONES 

    function edadPersona($edadMinima = 18){
        if($edadMinima >= 18){
            echo "La edad es: $edadMinima <br>";
        } else {
            echo "Eres menor de edad, lo siento <br>";
        }
    }

    edadPersona(15);
    edadPersona();
    edadPersona(70);
    echo "<hr>";

    //FUNCIÓN CON RETURN 
    // En este caso definimos el tipo de dato del parametro
    // siendo int / integer = entero

    function sumar(int $x, int $y){
        $z = $x + $y;
        return $z;
    }

    function mult(int $x, int $y){
        $z = $x * $y;
        return $z;
    }
    

    echo "5 + 10 = " . sumar(5, 10) . "<br>";
    echo "18 + 1000 = " . sumar(18, 1000) . "<br>";
    echo "18 * 1000 = " . mult(18, 1000) . "<br>";

?>