<?php

include("conexion.php");
$con=conectar();

$dni_usuario=$_GET['id'];

$sql="DELETE FROM usuario  WHERE dni_usuario='$dni_usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>
