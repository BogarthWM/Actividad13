<?php
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];

    $conexion=mysqli_connect('localhost','root','','crud');
    $consulta="INSERT INTO  usuarios(nombres, apellidos) VALUES ('$nombres', '$apellidos')";
    $ejecutar=mysqli_query($conexion, $consulta);
    if(!$ejecutar){
        echo "Ocurrió un error";
    }else{
        header("Location: index.html");
    }
?>
