<?php
include("basedatos.php");

if(!empty($_POST['empleado_nombre']) && !empty($_POST['empleado_edad']) && !empty($_POST['empleado_id'])){
    $conn = conectar_bd();
    $query = "UPDATE empleado SET nombre='".$_POST['empleado_nombre']."',edad='".$_POST['empleado_edad']."' WHERE id=".$_POST['empleado_id'];

    $consulta = mysqli_query($conn,$query);

    if($consulta){
        header('Location: listaEmpleados.php');
    }else{
        header('Location: nuevoEmpleado.php');
    }
}else{
    header('Location: nuevoEmpleado.php');
}


?>