<?php

    // Solicitamos la conexion a la base de datos a travez del metodo require();

    require('conexion.php');

    // Vamos a crear uan variable que traiga los datos que el usuario envia desde el formulario.
    
    $videojuego = $_GET['videojuego'];

    // Crearemos una variable que se va anecargar de contener la sentencia o instruccion sql 
    // para guardar los datos en la tabla videojuegos en la base de datos bictia.

    $sql = "INSERT INTO videojuegos (nombre) VALUES ('$videojuego')";

    // El metodo msqyli_query(); se encarga de enviar los datos
    // Necesita la conexion y la sentencia sql

    mysqli_query($conexion, $sql);

    // Direccionamiento de rutas

    header('Location: mostrar.php');

?>