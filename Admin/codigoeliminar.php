<?php
    $id = $_GET['id'];

    $conexion = mysqli_connect('localhost', 'root', '', 'udeo');
    $consulta = "DELETE FROM usuario WHERE id = $id";
    $ejecutar = mysqli_query($conexion, $consulta);
    if (!$ejecutar) {
        echo "Ocurrió un error";
    } else {
        header("Location: http://localhost/Actividad13/admin/tabla.php");
    }
?>
