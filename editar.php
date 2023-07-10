
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
         
         $id = isset($_GET['id']) ? $_GET['id'] : null;
         
         if ($id === null) {
             // Mostrar un mensaje de error o realizar alguna acción si el parámetro "id" no está definido
             echo "El parámetro 'id' no está definido.";
             exit;
         }
         
         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
             $nombre = $_POST['nombre'];
             $apellido = $_POST['apellido'];
             $email = $_POST['email'];
             $cantidad = $_POST['cantidad'];
             $categoria = $_POST['categoria'];
         
             $sql = "UPDATE tickets SET nombre = '$nombre', apellido = '$apellido', email = '$email', cantidad = '$cantidad', categoria = '$categoria' WHERE id = $id";
             $resultado = mysqli_query($conexion, $sql);
         
             if ($resultado) {
                 echo '<h5 class="text-center mt-5">Los cambios se han guardado correctamente.</h5>';
             } else {
                 echo "Error al guardar los cambios: " . mysqli_error($conexion);
             }
         }
         
         if (isset($_POST['delete'])) {
            $sql = "DELETE FROM tickets WHERE id = $id";
            $resultado = mysqli_query($conexion, $sql);
        
            if ($resultado) {
                echo '<h3>El registro ha sido eliminado correctamente.</h3>';
                exit;
            } else {
                echo "Error al eliminar el registro: " . mysqli_error($conexion);
            }
        }
         
         
         
         $sql = "SELECT * FROM tickets WHERE id = $id";
         $consulta = mysqli_query($conexion, $sql);
         $fila = mysqli_fetch_assoc($consulta);
         
         
         
         
         // Mostrar el formulario de edición
         echo '
     <!--FORMULARIO-->
     <main>
         <section class="container col-lg-6 mt-5">
             <div class="row justify-content-center">
                 <div class="col-md-12 my-10 gb-10">
                     <h5 class="text-center">Por favor modifique los datos que corresponda:</h5>
                     <form method="POST">
                         <div class="row gx-2 text-center">
                             <div class="col my-2">
                                 <h6>Nombre</h6>
                                 <input type="text" class="form-control" id="nombre" name="nombre" value="' . $fila['nombre'] . '" required pattern="^[A-Za-z<ÑñÁáÉéÍíÓóÚú\S]+$" minlength="2"
                                     maxlength="15">
                             </div>
                             <div class="col my-2">
                                 <h6>Apellido</h6>
                                 <input type="text" class="form-control" id="apellido" name="apellido" value="' . $fila['apellido'] . '" required pattern="^[A-Za-z<ÑñÁáÉéÍíÓóÚú\S]+$" minlength="2"
                                 maxlength="15">
                             </div>
                         </div>
                         <div class="row text-center">
                             <div class="col my-2">
                                 <h6>Email</h6>
                                     <input type="email" class="form-control" id="email" name="email" value="' . $fila['email'] . '" required pattern="^[^@]+@[^@]+\.[a-zA-Z]{2,}$">
                             </div>
                         </div>
                         <div class="row gx-2 text-center">
                             <div class="col-md-6 my-2">
                                 <h6>Cantidad</h6>
                                 <input type="number" class="form-control" id="cantidad" name="cantidad" value="' . $fila['cantidad'] . '" required pattern="^[0-9]+">
                             </div>
                             <div class="col-md-6 my-2">
                                 <h6>Categoría</h6>
                                 <select class="form-select" id="categoria" name="categoria" required>
                                     <option value="General" ' . ($fila['categoria'] == 'General' ? 'selected' : '') . '>General</option>
                                     <option value="Junior" ' . ($fila['categoria'] == 'Junior' ? 'selected' : '') . '>Junior</option>
                                     <option value="Trainee" ' . ($fila['categoria'] == 'Trainee' ? 'selected' : '') . '>Trainee</option>
                                     <option value="Estudiante" ' . ($fila['categoria'] == 'Estudiante' ? 'selected' : '') . '>Estudiante</option>
                                 </select>
                             </div>
                         </div>
                         <div class="row gx-2">
                             <div class="col-12 my-3">
                                 <button id="comprar" type="submit"  class="col-12 btn btn-info">Editar formulario</button>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </section>
     </main>
    <div class="container" style="height: 20px;"></div>';
         
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