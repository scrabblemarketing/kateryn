<?php include 'includes/templates/header.php' ?>



    <section class="contacto">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <h2 class="text-center text-uppercase mb-4">Escribe tu consulta</h2>
                    <!-- <form action="sendmail.php" method="post" id="form-contacto" class="contacto-form bordeado clearfix">
                        <div class="form-group animated fadeInLeft">
                            <input type="email" class="form-control" placeholder="Nombre" name="nombre" id="nombre">
                        </div>
                        <div class="form-group animated fadeInRight">
                            <input type="text" class="form-control" placeholder="Apellido" name="apellido" id="apellido">
                        </div>
                        <div class="form-group animated fadeIn">
                            <input type="email" class="form-control" placeholder="Ingresa tu correo" name="email" id="email">
                        </div>
                        <div class="form-group animated fadeInLeft ">
                            <input type="text" class="form-control" placeholder="Celular" name="telefono" id="telefono">
                        </div>
                        <div class="form-group animated fadeInRight">
                            <input type="text" class="form-control" placeholder="Asunto" name="asunto" id="asunto">
                        </div>
                        <div class="form-group animated fadeInDown">
                            <textarea class="form-control" placeholder="Tu Mensaje" name="mensaje" id="mensaje"></textarea>
                        </div>
                        <input type="hidden" name="envio" id="envio" value="contacto">
                        <input type="submit" name="submit" class="btn btn-primary btn-enviar d-block w-50 mx-auto" value="Enviar">
                    </form> -->
                     <form action="sendmail.php" method="post" id="form-contacto" class="contacto-form row bordeado clearfix">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Apellido" name="apellido" id="apellido">
                        </div>
                        <div class="form-group col-12 animated fadeIn">
                            <input type="email" class="form-control" placeholder="Ingresa tu correo" name="email" id="email">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Celular" name="telefono" id="telefono">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Asunto" name="asunto" id="asunto">
                        </div>
                        <div class="form-group col-12 animated fadeInDown">
                            <textarea class="form-control" placeholder="Tu Mensaje" name="mensaje" id="mensaje"></textarea>
                        </div>
                        <input type="hidden" name="envio" id="envio" value="contacto">
                        <input type="submit" name="submit" class="btn btn-primary btn-enviar d-block w-50 mx-auto" value="Enviar">
                    </form>
                    
                </div>
            </div>
        </div>
    </section>






    <?php include 'includes/templates/footer.php' ?>