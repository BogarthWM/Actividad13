<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header nav {
            background-color: #dc3545;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            display: grid;
            grid-gap: 10px;
        }
        form label {
            font-weight: bold;
        }
        form input[type="text"],
        form input[type="email"],
        form input[type="date"] {
            width: calc(100% - 10px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }
        form input[type="checkbox"] {
            width: auto;
        }
        form input[type="submit"],
        form a {
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 16px;
        }
        form input[type="submit"] {
            background-color: #28a745; /* Verde */
        }
        form a {
            background-color: #dc3545; /* Rojo */
        }
        form input[type="submit"]:hover,
        form a:hover {
            filter: brightness(85%);
        }
        table {
            width: 100%;
        }
        table th,
        table td {
            padding: 10px;
            text-align: left;
        }
        table th {
            background-color: #007bff;
            color: #fff;
            border: none;
        }
        table td {
            border-bottom: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <?php
        $id = $_GET['id'];
        $conexion = mysqli_connect('localhost', 'bogar', '123', 'udeo');
        $consulta = "SELECT * FROM usuario WHERE id LIKE '%$id%'";
        $ejecutar = mysqli_query($conexion, $consulta);

        if ($fila = mysqli_fetch_assoc($ejecutar)) {
            $primer_nombre = $fila['primer_nombre'];
            $segundo_nombre = $fila['segundo_nombre'];
            $primer_apellido = $fila['primer_apellido'];
            $segundo_apellido = $fila['segundo_apellido'];
            $genero = $fila['genero'];
            $fecha_nacimiento = $fila['fecha_nacimiento'];
            $correo_electronico = $fila['correo_electronico'];
            $telefono = $fila['telefono'];
            $direccion = $fila['direccion'];
            $departamento = $fila['departamento'];
            $leido = $fila['leido'];
        } else {
            echo "Usuario no encontrado";
            exit;
        }
    ?>
    <div class="container">
        <h2>Editar Usuario</h2>
        <form action="codigoeditar.php" method="post">
            <table border="1">
                <tr>
                    <td colspan="2">INGRESO DE DATOS</td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value="<?= $id ?>"></td>
                </tr>
                <tr>
                    <th>Primer Nombre</th>
                    <td><input type="text" name="primer_nombre" value="<?= $primer_nombre ?>"></td>
                </tr>
                <tr>
                    <th>Segundo Nombre</th>
                    <td><input type="text" name="segundo_nombre" value="<?= $segundo_nombre ?>"></td>
                </tr>
                <tr>
                    <th>Primer Apellido</
                    th>
                    <td><input type="text" name="primer_apellido" value="<?= $primer_apellido ?>"></td>
                </tr>
                <tr>
                    <th>Segundo Apellido</th>
                    <td><input type="text" name="segundo_apellido" value="<?= $segundo_apellido ?>"></td>
                </tr>
                <tr>
                    <th>Género</th>
                    <td><input type="text" name="genero" value="<?= $genero ?>"></td>
                </tr>
                <tr>
                    <th>Fecha de Nacimiento</th>
                    <td><input type="text" name="fecha_nacimiento" value="<?= $fecha_nacimiento ?>"></td>
                </tr>
                <tr>
                    <th>Correo Electrónico</th>
                    <td><input type="text" name="correo_electronico" value="<?= $correo_electronico ?>"></td>
                </tr>
                <tr>
                    <th>Teléfono</th>
                    <td><input type="text" name="telefono" value="<?= $telefono ?>"></td>
                </tr>
                <tr>
                    <th>Dirección</th>
                    <td><input type="text" name="direccion" value="<?= $direccion ?>"></td>
                </tr>
                <tr>
                    <th>Departamento</th>
                    <td><input type="text" name="departamento" value="<?= $departamento ?>"></td>
                </tr>
                <tr>
                    <th>Leído</th>
                    <td><input type="checkbox" name="leido" value="1" <?= $leido == 1 ? 'checked' : '' ?>></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Actualizar"></td>
                    <td><a href="http://localhost/Actividad13/admin/tabla.php">Cancelar</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
