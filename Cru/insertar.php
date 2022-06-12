<?php
include("conexion.php");
$con=conectar();

$dni_usuario=$_POST['dni_usuario'];
$correo=$_POST['correo'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];


$sql="INSERT INTO usuario VALUES('$dni_usuario','$correo','$nombres','$apellidos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuario.php");
    
}else {
}
?>