<?php
$servername = "localhost";
$database = "udeo";
$username = "bogar";
$password = "123";

// Conexión a la base de datos
$conexion = mysqli_connect($servername, $username, $password, $database);

// Verificar conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Recibir datos del formulario
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
//$leido = $_POST[false];

$sql = "INSERT INTO usuario (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, genero, fecha_nacimiento, correo_electronico, telefono, direccion, departamento) VALUES ('$primer_nombre', '$segundo_nombre', '$primer_apellido', '$segundo_apellido', '$genero', '$fecha_nacimiento', '$correo_electronico', '$telefono', '$direccion', '$departamento')";

if (mysqli_query($conexion, $sql)) {
    echo " <a href='/Actividad13/index.html'>Regresar</a>;";
} else {
    
}

mysqli_close($conexion);
?>


