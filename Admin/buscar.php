<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Usuarios</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('ruta/de/la/imagen.jpg'); /* Ruta de la imagen de fondo */
            background-size: cover; /* Cubre todo el espacio del cuerpo */
            background-position: center; /* Centra la imagen */
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif; /* Estilo de fuente predeterminado */
        }

        .container {
            margin-top: 20px;
        }

        .nav-link {
            color: #fff !important;
        }

        .navbar {
            background-color: #dc3545 !important; /* Color de fondo del navbar */
        }
    </style>
</head>
<body>
    <?php
    $buscar = isset($_POST['buscar']) ? $_POST['buscar'] : '';
    ?>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                <form class="form-inline my-2 my-lg-0" action="" method="post">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="buscar" value="<?= $buscar ?>">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
    </header>

    <div class="container">
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
                </tr>
            </thead>
            <tbody>
                <?php
                $conexion = mysqli_connect('localhost', 'bogar', '123', 'udeo');
                $consulta = "SELECT * FROM usuario WHERE primer_nombre LIKE '%$buscar%' OR segundo_nombre LIKE '%$buscar%' OR primer_apellido LIKE '%$buscar%' OR segundo_apellido LIKE '%$buscar%' OR genero LIKE '%$buscar%' OR fecha_nacimiento LIKE '%$buscar%' OR correo_electronico LIKE '%$buscar%' OR telefono LIKE '%$buscar%' OR direccion LIKE '%$buscar%' OR departamento LIKE '%$buscar%'";
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
                        <td><?php echo $mostrar['leido'] == 0 ? '<input type="checkbox" disabled>' : ''; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
