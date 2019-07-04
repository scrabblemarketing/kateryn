<?php 
    include 'includes/templates/header.php';
    include 'includes/funciones/conexion.php';
    
?>



    
    <div class="container mt-5">
        <div class="row temas-principales animated fadeOut" id="rowTemas">
            <div class="col-md-4 my-2">
                <img src="img/tema1.jpeg" class="img-fluid" alt="">
                <h3>Dermatología Estética</h3>
            </div>
            <div class="col-md-4 my-2">
                    <img src="img/tema2.jpeg" class="img-fluid" alt="">
                    <h3>Dermatología Clínica</h3>
            </div>
            <div class="col-md-4 my-2">
                    <img src="img/tema3.jpeg" class="img-fluid" alt="">
                    <h3>Dermatología Láser</h3>
            </div>
        </div>
    </div>


    <section class="p-5 my-5 container-fluid calidad">
        <h2 class="text-uppercase text-center">¿Por qué elegirnos?</h2>
        <div class="row mt-5" id="seccion2">
            <div class="col-md-3 animated fadeOut">
                <div class="box-seccion">
                    
                    <div class="body-info-seccion">
                            <h3>01</h3> 
                        <h4>Carrera</h4>
                    </div>
                    <p>Una de las mejores dermatólogos del país</p>
                   
                    
                </div>
                <div class="box-seccion">
                    
                    <div class="body-info-seccion">
                        <h3>02</h3>
                        <h4>Especialidades</h4>
                    </div>
                    <p>Especialista en tratamientos láser</p>
                    
                   
                </div>
            </div>
            <div class="col-md-6 animated fadeOut">
                <img src="img/calidad.jpg" class="img-fluid d-block mx-auto" id="img-animated" alt="¿Por que elegir a la Dra Katherin Perez?">
            </div>
            <div class="col-md-3 animated fadeOut">
                <div class="box-seccion">
                    <div class="body-info-seccion">
                        <h3>03</h3> 
                        <h4>Principios</h4>
                    </div>
                    <p>Atención con un personal confiable y que conoces</p>
                    
                </div>
                <div class="box-seccion">
                    
                    <div class="body-info-seccion">
                        <h3>04</h3>
                        <h4>Alta Calidad</h4>
                    </div>
                    <p>La ultima tecnología para tratamientos dermatológicos y estéticos</p>
                    
                </div>
            </div>
            <div class="col-12 my-5">
                <a href="nosotros.php" class="btn btn-primary btn-redi text-uppercase">Más acerca de nosotros</a>
            </div>
        </div>
    </section>


    <div class="py-4 promocion">
        <div class="container">
                <h2 class="text-center text-uppercase my-5">Promociones</h2>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <img src="img/tratamientos/acne.jpg" class="img-fluid" alt="Promoción de tratamiento de acné">
                            <div class="card-body">
                                <h3>Dermatologia clinica</h3>
                                <h2>S/. 80</h2>
                                <a href="contacto.php" class="btn btn-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-3 -->
                    <div class="col-md-3">
                        <div class="card">
                            <img src="img/tratamientos/lifting face 4d 1072x640.jpg" class="img-fluid" alt="Promoción de tratamiento de Tensaso Facial 4D">
                            <div class="card-body">
                                <h3>Tensado Facial 4D INFINI +HIFU</h3>
                                <h2>S/. 1000</h2>
                                <a href="contacto.php" class="btn btn-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-3 -->
                    <div class="col-md-3">
                        <div class="card">
                            <img src="img/tratamientos/limpieza.jpg" class="img-fluid" alt="Promoción de tratamiento de Limpieza facial con OXYCRYO">
                            <div class="card-body">
                                <h3>Limpieza Facial OXYCRYO</h3>
                                <h2>S/. 229</h2>
                                <a href="contacto.php" class="btn btn-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-3 -->
                    <div class="col-md-3">
                        <div class="card">
                            <img src="img/tratamientos/hollywood peel 1072x640.jpg" class="img-fluid" alt="Promoción de tratamiento de Láser SPECTRA">
                            <div class="card-body">
                                <h3>Láser SPECTRA</h3>
                                <h2>S/. 330</h2>
                                <a href="contacto.php" class="btn btn-primary">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-3 -->
                </div>
                <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- .promocion -->




    <section class="blogs container">
        <h2 class="text-center text-uppercase"><a href="blog.php?title=blogs">Blog</a></h2>
        <?php include('includes/templates/carousel.php') ?>
    </section>

    <div class="suscripcion">
        <div class="container">
            <form action="suscripcion.php" id="form-susc" class="suscripcion">
                <p>Suscríbete</p>
                <input type="text" name="email" id="email-sus" placeholder="Ingresa tu Email">
                <input type="submit" name="suscripcion" value="Registrarme">
            </form>
        </div>
    </div>







    <?php 
    include 'includes/templates/footer.php'
?>