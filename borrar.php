
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="author" content="Carolina Inés Fuentes">
    <meta name="description" content="Trabajo Front-End Codo a Codo">
    <link rel="icon" href="assets/img/codoacodo1.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&family=Lato:wght@300;400;900&display=swap">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <title>Codo a Codo Front End</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg cabecera">
            <div class="container-fluid">
                <span class="navbar-brand text-white ms-5" href="Logo Codo a codo ">
                    <img src="assets/img/codoacodo1.png" alt="Logo" width="80" height="50"
                        class="d-inline-block align-text-center h1">
                    Conf Bs As
                </span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <div class="navbar-nav ms-auto ">
                        <a class="nav-link active fw-semibold text-white" aria-current="page" href="#">La
                            Conferencia</a>
                        <a class="nav-link fw-semibold text-white-50" href="index.php#oradores">Los oradores</a>
                        <a class="nav-link fw-semibold text-white-50" href="index.php#lugaryfecha">El lugar y la fecha</a>
                        <a class="nav-link fw-semibold text-white-50" href="index.php#orador">Conviértete en orador</a>
                        <a class="nav-link fw-semibold compra"  href="formTickets.php">Comprar tickets</a>
                    </div>
                </div>
            </div>
        </nav>
</header>
    <div class="container" style="height: 50px;"></div>




<?php

$servidor = "localhost";
$usuario = "root";
$clave = "Arg@1234";
$baseDatos = "tickets";

$conexion = mysqli_connect($servidor, $usuario, $clave, $baseDatos);

if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}


// Verificar si se recibió el parámetro "id" en la URL
if(isset($_GET['id'])) {
    // Obtener el ID del registro a eliminar
    $id = $_GET['id'];

    // Realizar la conexión a la base de datos
    $conexion = mysqli_connect($servidor, $usuario, $clave, $baseDatos);

    // Verificar la conexión
    if (!$conexion) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
    }

    // Construir la consulta para eliminar el registro
    $consulta = "DELETE FROM tickets WHERE id = '$id'";

    // Ejecutar la consulta
    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a la página principal o a otra página de tu elección después de eliminar el registro
        header("Location: datosCompra.php");
        exit();
    } else {
        echo "Error al eliminar el registro: " . mysqli_error($conexion);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
} else {
    echo "No se proporcionó el ID del registro a eliminar";
}
?>


<div class="container" style="height: 50px;"></div>

<!--BARRA INFERIOR-->
<footer class="fixed-bottom">
    <ul class="nav justify-content-center blue p-3 w-100">
        <li class="nav-item">
            <a class="nav-link text-white" href="#">Preguntas frecuentes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="#">Contáctanos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="#">Prensa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="#">Conferencias</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="#">Términos y condiciones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="#">Privacidad</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="./tickets.php">Tickets</a>
        </li>
    </ul>
</footer>
<!--SCRIPT-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>