<?php
    require('conexion.php');

    $id = $_GET['id'];

    // Seleccionamos todos los datos de la tabla videojuegos
    $sql = "SELECT nombre FROM videojuegos WHERE id = '$id'";

    // crear una variable que guarde el resultado de la consulta en la base de datos 
    $resultado = mysqli_query($conexion, $sql);

    // Crearemos una variable que se encargara de manipular y contener 
    // el resultado ya que esta nos devolvera un arreglo
    
    $videojuegos = mysqli_fetch_all($resultado);

    echo $videojuegos;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="editar.php" method="GET">
        <input type="text" value="<?php echo $videojuego[1]; ?>">
        <button type="submit">Modificar</button>
    </form>

</body>
</html>