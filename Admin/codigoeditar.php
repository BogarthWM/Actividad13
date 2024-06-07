<?php
    $id = $_POST['id'];
    $primer_nombre = $_POST['primer_nombre'];
    $segundo_nombre = $_POST['segundo_nombre'];
    $primer_apellido = $_POST['primer_apellido'];
    $segundo_apellido = $_POST['segundo_apellido'];
    $genero = $_POST['genero'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $correo_electronico = $_POST['correo_electronico'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $departamento = $_POST['departamento'];
    $leido = isset($_POST['leido']) ? 1 : 0;

    $conexion = mysqli_connect('localhost', 'bogar', '123', 'udeo');
    $consulta = "UPDATE usuario SET primer_nombre='$primer_nombre', segundo_nombre='$segundo_nombre', primer_apellido='$primer_apellido', segundo_apellido='$segundo_apellido', genero='$genero', fecha_nacimiento='$fecha_nacimiento', correo_electronico='$correo_electronico', telefono='$telefono', direccion='$direccion', departamento='$departamento', leido=$leido WHERE id=$id";
    $ejecutar = mysqli_query($conexion, $consulta);

    if (!$ejecutar) {
        echo "Ocurrió un error";
    } else {
        header("Location: http://localhost/Actividad13/admin/tabla.php");
    }
?>
