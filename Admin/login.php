<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/Actividad13/admin/estiloadmin.css">
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="Img/logo_wn.png" width="250" height="100" class="d-inline-block align-top" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data/formulario.html">Solicitud de Inscripcion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/log.html">Administrativo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Administrativo">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <?php
        session_start();

        // Definir usuario y contraseña
        $usuario_autorizado = 'admin';
        $contraseña_autorizada = '123';

        // Obtener datos del formulario
        $usuario_ingresado = $_POST['username'];
        $contraseña_ingresada = $_POST['password'];

        // Verificar si el usuario y la contraseña son correctos
        if ($usuario_ingresado === $usuario_autorizado && $contraseña_ingresada === $contraseña_autorizada) {
            // Iniciar sesión y redirigir a una página de bienvenida
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $usuario_autorizado;
            header("Location: /Actividad13/admin/tabla.php");
            exit;
        } else {
            // Si el usuario y/o contraseña son incorrectos, mostrar un mensaje de error y volver al formulario de inicio de sesión
            echo '<script>alert("Usuario o contraseña incorrectos. Por favor, inténtelo de nuevo."); window.location.href = "/Actividad13/admin/log.html";</script>';
        }
    ?>
<main class="main-content" style="background-image: url(''); background-size: cover; background-position: center; height: 100vh;">
        <!-- Contenido del main -->
    </main>
    
    <footer class="footer mt-auto py-3 bg-dark text-white">
        <div class="container text-center">
            <p>&copy; 2024 Universidad de Udeo</p>
            <p>Contacto: info@udeo.edu</p>
            <p>Dirección: 123 Calle Principal, Quetzaltenango, Guatemala</p>
        </div>
    </footer>
</body>
</html>

