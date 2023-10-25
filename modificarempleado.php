<?php
include("basedatos.php");
$conn = conectar_bd();
$query = "SELECT id,nombre,edad FROM empleado WHERE id=".$_GET['empleadoid']." LIMIT 1";
$consulta = mysqli_query($conn,$query);
mysqli_close($conn);

$tupla = mysqli_fetch_assoc($consulta);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar empleado</title>
</head>
<body>
    <form action="actualizarempleado.php" method="post" name="nuevoEmpleado">
        Nombre:<input type="text" name="empleado_nombre" value="<?php echo $tupla['nombre'] ?>"><br>
        Edad:<input type="number" name="empleado_edad" value="<?php echo $tupla['edad'] ?>"><br>
        Id:<input type="hidden" name="empleado_id" value="<?php echo $tupla['id'] ?>"><br>
        <input type="submit" name="Actualizar empleado">
    </form>
</body>
</html>