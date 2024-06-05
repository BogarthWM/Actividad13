<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./estilo.css">
</head>
<body>
    <?php
        //base de datos
        $servername = "localhost" ;
        $database = "udeo";
        $username = "bogar" ;
        $password = "123";
        
        //variables
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        
        //conexion
        $conexion = mysqli_connect($servername,$username,$password,$database);

        //ingresar variable a base de datos
        $sql = "INSERT INTO nuevo (id,nombre) values ('$id','$nombre')";

        if(mysqli_query($conexion, $sql)){
            echo "Datos almacenados correctamente"."<a href='index.html'>Regresar</a>";
        }else{
            echo "Ocurrió un error";
        }
    ?>
</body>
</html>


