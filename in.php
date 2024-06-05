<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="buscar.php" method="post">
            <input type="text" name="buscar">
            <input type="submit" value="Buscar">
            <a href="nuevo.php">Nuevo</a>
        </form>
    </div>

    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
            </tr>
            <?php

            $servername = "localhost" ;
            $database = "udeo";
            $username = "bogar" ;
            $password = "123";

            $conexion = mysqli_connect($servername,$username,$password,$database);
            $consulta="SELECT * from nuevo";
            $ejecutar=mysqli_query($conexion, $consulta);

            while ($mostrar=mysqli_fetch_array($ejecutar)){
            ?>
            <tr>
                <td> <?php echo $mostrar['id']?></td>
                <td> <?php echo $mostrar['nombre']?></td>
                <td>
                    <a href="editar.php?
                    id=<?php echo $mostrar['id']  ?> &
                    nombres=<?php echo $mostrar['nombre']  ?>
                    ">Editar</a>
                    <a href="codigoeliminar.php? id=<?php echo $mostrar['id'] ?>">Eliminar</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>