<?php
    require('conexion.php');
    //Seleccionamos todos los datos de la tabla videojuegos
    $sql = "SELECT * FROM videojuegos";
    //Crear una varialbe que guarde los datos de la consulta
    $resultado =mysqli_query($conexion,$sql);
    //Crear variable que se encargara de manipular y contener el resultado
    $videojuegos = mysqli_fetch_all($resultado);

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body style="font-size:1.5em;">
    <h1 class="titulo1">Mis videojuegos</h1>
    <form class="caja" action="insertar.php" method="GET">
        <input class="form-1" type="text" name="videojuego" id="" placeholder="Agregar un videojuego">
        <button class="form-2" type="submit">Agregar</button> 
           
    </form>
    <table class="tabla-1" style="border:1px solid black;border-spacing:10px;">
    <?php foreach($videojuegos as $videojuego): ?>
        <tr>
            <td class="tabla-2"  style="border:1px solid black;pading:5px;"><?php echo $videojuego[1]; ?></td>
            <td class="tabla-3"><a href="eliminar.php?id=<?php echo $videojuego[0]; ?>">Eliminar</a></td>
            <td class="tabla-4"><a href="editar.php?id=<?php echo $videojuego[0]; ?>">Cambiar</a></td>
        </tr>
    <?php endforeach; ?>
 
</body>
</html>