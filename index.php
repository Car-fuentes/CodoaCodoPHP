    <?php 
        include ("menu.php");
    ?>
    <!--HEADER-->
    <section>
        <!-- CARROUSEL -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/ba1.jpg" class="d-block w-100" alt="Museo del Agua">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Conf Bs As</h1>
                        <p>Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el
                            conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a
                            conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer
                            nivel que
                            tenemos para ti. Te esperamos!</p>
                        <a href="#orador" type="button" class="btn btn-outline-light">Quiero ser orador</a>
                        <a href="./formTickets.php" type="button" class="btn btn-success">Comprar tickets</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/ba4.jpg" class="d-block w-100" alt="Torrepueblo">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Conf Bs As</h1>
                        <p>Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el
                            conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a
                            conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer
                            nivel que tenemos para ti. Te esperamos!</p>
                        <a href="#orador" type="button" class="btn btn-outline-light">Quiero ser orador</a>
                        <a href="./formTickets.php" type="button" class="btn btn-success">Comprar tickets</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/ba3.jpg" class="d-block w-100" alt="Obelisco">
                    <div class="carousel-caption d-none d-md-block">>
                        <h1>Conf Bs As</h1>
                        <p>Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el
                            conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a
                            conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer
                            nivel que tenemos para ti. Te esperamos!</p>
                        <a href="#orador" type="button" class="btn btn-outline-light">Quiero ser orador</a>
                        <a href="./formTickets.php" type="button" class="btn btn-success">Comprar tickets</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--ORADORES-->
    <main id="oradores">
        <div class="container-fluid text-center my-4">
            <p class="my-0 text-uppercase ">conoce a los</p>
            <p class="text-uppercase fs-2 fw-semibold">oradores</p>
            <div class="container d-flex justify-content-center">
                <div class="row tarjetas">
                    <div class="col-md-6 col-lg-4 mb-3 ">
                        <div class="card text-start" style="width: 18rem;">
                            <img src="images/steve.jpg" class="card-img-top" alt="Steve Jobs">
                            <div class="card-body">
                                <span class="badge bg-warning">JavaScript</span>
                                <span class="badge bg-primary">React</span>
                                <h5 class="card-title fs-4">Steve Jobs</h5>
                                <p class="card-text">Diseñador industrial, magnate empresarial, propietario de medios e
                                    inversor estadounidense. Fue cofundador y presidente ejecutivo de Apple​ y máximo
                                    accionista
                                    individual de The Walt Disney Company.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="card text-start" style="width: 18rem;">
                            <img src="images/bill1.jpg" class="card-img-top" alt="Bill Gates">
                            <div class="card-body">
                                <span class="badge bg-warning">JavaScript</span>
                                <span class="badge bg-primary">React</span>
                                <h5 class="card-title fs-4">Bill Gates</h5>
                                <p class="card-text">William Henry Gates III, magnate empresarial, desarrollador de
                                    software, inversor, autor y filántropo estadounidense. Es cofundador de Microsoft,
                                    junto con su difunto
                                    amigo de la infancia Paul Allen.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3">
                        <div class="card text-start" style="width: 18rem;">
                            <img src="images/ada.jpeg"" class=" card-img-top" alt="Ada Lovelace">
                            <div class="card-body">
                                <span class="badge bg-secondary">Negocios</span>
                                <span class="badge bg-danger">Startups</span>
                                <h5 class="card-title fs-4">Ada Lovelace</h5>
                                <p class="card-text">Augusta Ada King, condesa de Lovelace, matemática y escritora
                                    británica, célebre sobre todo por su trabajo acerca de la computadora mecánica de
                                    uso general de
                                    Charles Babbage, la denominada máquina analítica.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--TARJETA CENTRAL-->
    <section id="lugaryfecha" class="tarjeta">
        <div class="card mb-2 w-100">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="images/laboca.jpg" class="img-fluid rounded-start" alt="Obelisco Bs As">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title text-white">Bs As - Octubre</h5>
                        <p class="card-text text-white">La ciudad de Buenos Aires es la capital federal de la
                            República
                            de Argentina. Rodeada por el Río de la Plata y la provincia de Buenos Aires, conforma
                            junto a
                            24 partidos cercanos de la provincia el Gran Buenos Aires, una megaciudad donde habitan
                            aproximadamente
                            14 millones de personas y donde se ubica el polo industrial económico mas importante del
                            país.</p>
                        <p class="card-text">
                            <a href="#" type="button" class="btn btn-outline-light">Conocé mas</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--FORMULARIO-->
    <section id="orador" class="mt-4 mb-2">
        <div class="container text-center">
            <p class="text-uppercase my-0">conviertete en un</p>
            <p class="text-uppercase fs-2 fw-semibold">orador</p>
            <p>Anótate como orador para dar una <span class="punteado">charla ignite.</span>
                Cuéntanos de que quieres hablar!
            </p>
            <div class="container text-start formulario pt-0">
                <form class="row gx-4 gy-3">
                    <div class="col-md-6">
                        <label for="inputNombre" class="form-label"></label>
                        <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
                    </div>
                    <div class="col-md-6">
                        <label for="inputApellido" class="form-label"></label>
                        <input type="text" class="form-control" id="inputApellido" placeholder="Apellido">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here"
                            id="floatingTextarea"></textarea>
                        <label for="floatingTextarea" class="text-muted fs-4">Sobre qué quieres hablar?</label>
                    </div>
                    <div>
                        <p class="fs-6 mx-0 my-0 text-body-secondary">Recuerda incluir un título para tu charla</p>
                    </div>
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-success fs-4 text-white">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

<?php include ("footer.php"); ?>