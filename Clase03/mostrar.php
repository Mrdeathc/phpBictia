<?php
    require('conexion.php');

    // Seleccionamos todos los datos de la tabla videojuegos
    $sql = "SELECT * FROM videojuegos";

    // crear una variable que guarde el resultado de la consulta en la base de datos 
    $resultado = mysqli_query($conexion, $sql);

    // Crearemos una variable que se encargara de manipular y contener 
    // el resultado ya que esta nos devolvera un arreglo
    
    $videojuegos = mysqli_fetch_all($resultado);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Videojuego</title>
</head>
<body>
    
    <form action="insertar.php" method="GET">

        <input type="text" name="videojuego">
        <button type="submit">Agregar</button> 

    </form>

    <?php foreach($videojuegos as $videojuego): ?>
        <p> 
            <?php echo $videojuego[1]; ?> 
            <a href="eliminar.php?id=<?php echo $videojuego[0] ?>">X</a>

            <a href="cambiar.php?id=<?php echo $videojuego[0] ?>">Editar</a>
        </p>
    <?php endforeach; ?>

</body>
</html>