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

</body>
</html>

