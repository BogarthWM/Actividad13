<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Usuarios</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
            <a class="navbar-brand" href="#">Tabla de Usuarios</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/Actividad13/admin/tabla.php">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/Actividad13/index.html">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container mt-5">
        <h2 class="mb-4">Usuarios Registrados</h2>
        <form action="buscar.php" method="post" class="mb-4">
            <div class="input-group">
                <input type="text" class="form-control" name="buscar" placeholder="Ingrese el término de búsqueda">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </div>
            </div>
        </form>

        <form action="actualizar_leido.php" method="post"> <!-- Formulario para actualizar el valor de leido -->
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Primer Nombre</th>
                        <th>Segundo Nombre</th>
                        <th>Primer Apellido</th>
                        <th>Segundo Apellido</th>
                        <th>Género</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Correo Electrónico</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Departamento</th>
                        <th>Leído</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $servername = "localhost";
                    $database = "udeo";
                    $username = "bogar";
                    $password = "123";

                    $conexion = mysqli_connect($servername, $username, $password, $database);
                    $consulta = "SELECT * FROM usuario";
                    $ejecutar = mysqli_query($conexion, $consulta);

                    while ($mostrar = mysqli_fetch_array($ejecutar)) {
                    ?>
                        <tr>
                            <td><?php echo $mostrar['id'] ?></td>
                            <td><?php echo $mostrar['primer_nombre'] ?></td>
                            <td><?php echo $mostrar['segundo_nombre'] ?></td>
                            <td><?php echo $mostrar['primer_apellido'] ?></td>
                            <td><?php echo $mostrar['segundo_apellido'] ?></td>
                            <td><?php echo $mostrar['genero'] ?></td>
                            <td><?php echo $mostrar['fecha_nacimiento'] ?></td>
                            <td><?php echo $mostrar['correo_electronico'] ?></td>
                            <td><?php echo $mostrar['telefono'] ?></td>
                            <td><?php echo $mostrar['direccion'] ?></td>
                            <td><?php echo $mostrar['departamento'] ?></td>
                            <td>
                                <input type="hidden" name="id[]" value="<?php echo $mostrar['id'] ?>"> 
                                <input type="checkbox" name="leido[]" <?php echo $mostrar['leido'] == 1 ? 'checked' : ''; ?>> 
                            </td>
                            <td>
                                <a href="/Actividad13/admin/editar.php?id=<?php echo $mostrar['id'] ?>" class="btn btn-primary btn-sm">Editar</a>
                                <a href="/Actividad13/admin/codigoeliminar.php?id=<?php echo $mostrar['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button> 
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2
