<?php 

include("conexion.php");
if (isset($_POST['btnregistrarse'])) {
    $nombre =$_POST['nombre'];
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    $correo=$_POST['correo'];
    
    $consulta="INSERT INTO usuarios(usuario, nombre, correo, contraseña) VALUES ('$usuario','$nombre','$correo','$contraseña')";
    
    $resultado = mysqli_query($cnn,$consulta);
    if ($resultado) {
        header("Location:../inicioSesion.html");
    }else{
        echo "<script>alert('Hubo un error al registrarse')</script>";
       }

}


?>