<?php
include("basedatos.php");

if(!empty($_POST['empleado_nombre']) && !empty($_POST['empleado_edad'])){
    $conn = conectar_bd();
    $query = "INSERT INTO empleado (nombre,edad) VALUES
                ('".$_POST['empleado_nombre']."','".$_POST['empleado_edad']."')";
    $consulta = mysqli_query($conn,$query);
    if($consulta){
        header('location:listaEmpleados.php');
    }else{
        header('location:nuevoEmpleado.php');
    }
}else{
    //redireccionar si los campos estan vacios
    header('location:nuevoEmpleado.php');
}

?>