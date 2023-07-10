
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

    <!--Tarjetas-->
    <section class="container col-lg-6 mt-5 tarjetas-compra">
        <div class="row justify-content-center text-center mx-500">
            <div class="col estudiante py-3">
                <h3>Estudiante</h3>
                <p>Tienen un descuento</p>
                <h4>80%</h4>
                <p>*presentar documentación</p>
            </div>
            <div class="col trainee mx-2 py-3">
                <h3>Trainee</h3>
                <p>Tienen un descuento</p>
                <h4>50%</h4>
                <p>*presentar documentación</p>
            </div>
            <div class="col junior py-3">
                <h3>Junior</h3>
                <p>Tienen un descuento</p>
                <h4>15%</h4>
                <p>*presentar documentación</p>
            </div>
        </div>
    </section>



    <!--FORMULARIO-->
    <main>
        <section class="container col-lg-6 mt-5">
            <div class="row justify-content-center">
                <div class="col-md-12 mb-5">
                    <h6 class="text-uppercase text-center">venta</h6>
                    <h1 class="text-uppercase text-center">valor del ticket $200</h1>
                    <form id="formulario" method="POST" action="datosCompra.php"  name="formulario">
                        <div class="row gx-2">
                            <div class="col mb-2">
                                <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre"
                                    aria-label="Nombre" required pattern="^[A-Za-z<ÑñÁáÉéÍíÓóÚú\S]+$" minlength="2"
                                    maxlength="15" />
                            </div>
                            <div class="col mb-2">
                                <input id="apellido" name="apellido" type="text" class="form-control" placeholder="Apellido"
                                    aria-label="Apellido" required pattern="^[A-Za-z<ÑñÁáÉéÍíÓóÚú\S]+$" minlength="2"
                                    maxlength="15" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-2">
                                <input id="email" name="email" type="email" class="form-control" placeholder="E-mail"
                                    aria-label="Email" required pattern="^[^@]+@[^@]+\.[a-zA-Z]{2,}$" />
                            </div>
                        </div>
                        <div class="row gx-2 text-center">
                            <div class="col-md-6 mb-3">
                                <label for="cantidad" class="form-label">Cantidad</label>
                                <input id="cantidad" name="cantidad" type="number" class="form-control" placeholder="cantidad"
                                    aria-label="cantidad" required pattern="^[0-9]+" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="categoria" class="form-label">Categoría</label>
                                <select class="form-select" id="categoria" name="categoria"
                                    aria-label="Default select example">
                                    <option value="estudiante">Estudiante</option>
                                    <option value="trainee">Trainee</option>
                                    <option value="junior">Junior</option>
                                    <option value="general">General</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col mb-2">
                                <p id="resumenDePago" class="form-control">
                                    Total a pagar $</p>
                            </div>

                        </div>

                        <div class="row gx-2">
                        <div class="col-md-6 mb-3">
                           <div class="d-grid gap-2 ">
                                   <button id="borrar" class="g-col-3 btn btn-success text-white">Borrar</button>
                            </div>
                        </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-grid gap-2 ">
                                    <button id="detalle" class="g-col-3 btn btn-success text-white" type="button">Resumen</button>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-2">
                            <div class="col-12 mb-3">
                                <button id="comprar" type="submit"  class="col-12 btn btn-info">Comprar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <!--BARRA INFERIOR-->
<footer>
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
    <script src="assets/js/script.js"></script>
</body>

</html>