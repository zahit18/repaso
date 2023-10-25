<?php
    include("basedatos.php");
    $conn = conectar_bd();
    $query = "SELECT id,nombre,edad FROM empleado;";
    $consulta = mysqli_query($conn,$query);
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista empleados</title>
</head>
<body>
    <h1>Lista de empleados</h1>
    <ul>
        <!--obtener los registros o tuplas-->
        <?php
            while($tupla = mysqli_fetch_assoc($consulta)){
                echo '<li>'.$tupla['nombre'].'('.$tupla['edad'].' años) ';
                echo '<a href="modificarempleado.php?empleadoid='.$tupla['id'].'">Modificar</a> ';
                echo '<a href="eliminarempleado.php?empleadoid='.$tupla['id'].'">Eliminar</a></li>';
            }
        ?>
    </ul>
    <form action="nuevoEmpleado.php" method="post" name="nuevoEmpleado">
        <input type="submit" value="Nuevo Empleado">
</body>
</html>