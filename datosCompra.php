
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



<?php
$servidor = "localhost";
$usuario = "root";
$clave = "Arg@1234";
$baseDatos = "tickets";

$conexion = mysqli_connect($servidor, $usuario, $clave, $baseDatos);
if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = mysqli_real_escape_string($conexion, $_POST["nombre"]);
    $apellido = mysqli_real_escape_string($conexion, $_POST["apellido"]);
    $email = mysqli_real_escape_string($conexion, $_POST["email"]);
    $cantidad = mysqli_real_escape_string($conexion, $_POST["cantidad"]);
    $categoria = mysqli_real_escape_string($conexion, $_POST["categoria"]);

    $sql = "INSERT INTO tickets (nombre, apellido, email, cantidad, categoria) VALUES ('$nombre', '$apellido', '$email', '$cantidad', '$categoria')";
    if (mysqli_query($conexion, $sql)) {
        header("Location: " . $_SERVER["PHP_SELF"]);
        exit;
    } else {
        echo "Error al guardar los datos: " . mysqli_error($conexion);
    }
}

$sql = "SELECT * FROM tickets";
$consulta = mysqli_query($conexion, $sql);

if (mysqli_num_rows($consulta) > 0) {
    echo '<main>
            <div class="container col-lg-6 text-center my-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Mail</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>';

    while ($fila = mysqli_fetch_assoc($consulta)) {
        echo '<tr>
                <td>' . $fila['id'] . '</td>
                <td>' . $fila['nombre'] . '</td>
                <td>' . $fila['apellido'] . '</td>
                <td>' . $fila['email'] . '</td>
                <td>' . $fila['cantidad'] . '</td>
                <td>' . $fila['categoria'] . '</td>
                <td>
                    <a href="editar.php?id=' . $fila['id'] . '" class="btn-info">Editar</a>
                    <a href="borrar.php?id=' . $fila['id'] . '" class="btn-danger">Borrar</a>
                </td>
            </tr>';
    }

    echo '</tbody>
        </table>
    </div>
</main>';
} else {
    echo "No hay datos en la base de datos";
}



mysqli_close($conexion);
?>


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
            <a class="nav-link text-white" href="datosCompra.php">Tickets</a>
        </li>
    </ul>
</footer>
<!--SCRIPT-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>