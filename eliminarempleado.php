<?php
include("basedatos.php");

if(!empty($_GET['empleadoid'])){
    $conn = conectar_bd();
    $query = "DELETE FROM empleado WHERE id=".$_GET['empleadoid'];

    $consulta = mysqli_query($conn,$query);

    if($consulta){
        header('Location: listaEmpleados.php');
    }else{
        header('Location: nuevoEmpleado.php');
    }
}else{
    header('Location: nuevoEmpleado.php');
}
mysqli_close($conn);

?>