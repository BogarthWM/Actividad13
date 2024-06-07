<?php
$servername = "localhost";
$database = "udeo";
$username = "bogar";
$password = "123";

$conexion = mysqli_connect($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ids = $_POST['id'];
    $leidos = isset($_POST['leido']) ? $_POST['leido'] : array();

    foreach ($ids as $key => $id) {
        $leido = isset($leidos[$key]) ? 1 : 0;
        $query = "UPDATE usuario SET leido=$leido WHERE id=$id";
        mysqli_query($conexion, $query);
    }
}

header("Location: http://localhost/Actividad13/admin/tabla.php"); 
?>
