
    <?php include ("menu.php"); ?>

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
                            <div class="col-md mb-2">
                                <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre"
                                    aria-label="Nombre" required pattern="^[A-Za-z<ÑñÁáÉéÍíÓóÚú\S]+$" minlength="2"
                                    maxlength="15" />
                            </div>
                            <div class="col-md mb-2">
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
                                <p id="resumen" class="form-control">
                                    Total a pagar $</p>
                            </div>

                        </div>

                        <div class="row gx-2">
                            <div class="col-md-6 mb-3">
                                <div class="d-grid gap-2 ">
                                    <button id="borrar" class="g-col-3 btn btn-success text-white" type="button" onclick="return resetear();">Borrar</button>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-grid gap-2 ">
                                    <button id="detalle" class="g-col-3 btn btn-success text-white">Resumen</button>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-2">
                            <div class="col-12 mb-3">
                                <button id="comprar" type="submit" class="col-12 btn">Comprar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php include ("footer.php"); ?>