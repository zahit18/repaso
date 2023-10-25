<?php
function conectar_bd(){
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $nombrebd = "empresa";
    
    $conexion = mysqli_connect($servidor,$usuario,$password,$nombrebd);

    return $conexion;
}


?>