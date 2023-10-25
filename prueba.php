<?php
include("basedatos.php");

$conexionbd = conectar_bd();
if($conexionbd){
    echo "Conexion exitosa";
}else{
    echo "Conexio fallida";
}
//echo $conexionbd;
mysqli_close($conexionbd);
?>