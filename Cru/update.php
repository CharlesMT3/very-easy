<?php

include("conexion.php");
$con=conectar();

$dni_usuario=$_POST['dni_usuario'];
$correo=$_POST['correo'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$sql="UPDATE alumno SET  correo='$correo',nombres='$nombres',apellidos='$apellidos' WHERE dni_usuario='$dni_usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>