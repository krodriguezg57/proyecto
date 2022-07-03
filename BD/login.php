<?php

include("conexion.php");

if(!$cnn)
{
    die("No hay conexion".mysqli_connect_error());
}


$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];


$resultado=mysqli_query($cnn,"SELECT * FROM usuarios WHERE correo='".$correo."' and contraseña='".$contraseña."'");

$filas=mysqli_num_rows($resultado);

if($filas==1){
    header("Location:../inicioSesion.html");

}else if($filas==0){
    header("Location:../error.html");
}
?>
