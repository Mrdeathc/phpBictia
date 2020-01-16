<?php
    /* 
        TEORIA
            ¿QUÉ CARAJOS ES PHP?
    */

    // ARRAYS 
    $colores = array("Rojo", "Verde", "Azul", "Amarillo");

    foreach($colores as $valores){
        echo "$valores <br>";
    }

    echo count($colores); //longitud de un arreglo
    echo "<hr>";

    // OTRO RECORRIDO DE ARREGLOS

    $autos = array("ferrari", "lanborghini", "Audi");
    $longArreglo = count($autos);
    for($i = 0; $i < $longArreglo; $i++){
        echo $autos[$i] . "<br>";
    }
    


    // ARREGLOS ASOCIATIVOS 

    $persona = array("Luna"=>"18", "Fernando"=>"21", "Fabian L."=>"31");
        echo "<hr>";
        echo "Luna tiene " . $persona["Luna"] . " años";
        echo "<hr>";
    // $persona['Luna'] = "18"
    // $perosna['Fernando'] = "21"


    // RECCORRER UN ARREGLO ASOCIATIVO

    foreach($persona as $nombre => $nombre_edad){
        echo "clave: " .$nombre . ", Valor: " . $nombre_edad . "<br>";
    }
        echo "<hr>";

    // ARREGLOS MULTIDIMENSIONAL

    $productos = [
        [
            'nombre' => 'Empanada',
            'precio' => 1000,
            'cantidad' => 12
        ],
        [
            'nombre' => 'Pedazo de Pizza',
            'precio' => 5000,
            'cantidad' => 5
        ]
    ];

    $total = 0;
    foreach($productos as $producto){
        
        $total += $producto['precio'] * $producto['cantidad'];
        
        echo $producto['nombre'] . ": $" . $producto['precio'] . ' x ' . $producto['cantidad'] . "<br>";
    }

    echo "total: " . $total;
    echo "<hr>";

    // OTRA FORMA 

    $productos = array
    (
        array("Lechona", 50000, 2),
        array("Galletas", 600, 10),
        array("Gaseosas", 1500, 7)
    );

    echo $productos[0][0] . ': precio: ' . $productos[0][1];
    echo $productos[0][0] . ': precio: ' . $productos[1][1];

?>