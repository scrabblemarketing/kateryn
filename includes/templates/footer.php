<footer class="main-footer">
        <div class="container">
            <div class="row">
                <?php if($pagina == 'contacto' || isset($_GET['title'])):?>
                <div class="col-md-4">
                    <h4>Nuestra información</h4>
                    <p><i class="fas fa-map-marker-alt"></i> Avenida del Pinar 152 Piso 5 en Surco</p>
                    <p><i class="fas fa-at"></i> info@dermalaserkpw.com</p>
                    <p><i class="fas fa-phone"></i> (511) 415 3368 </p>
                    <p><i class="far fa-clock"></i> Horario de Atención</p>
                    <p class="pl-3">Lunes-Viernes: 10:00AM a 07:00PM <br> Sabados: 09:00AM a 01:00PM</p>
                </div>
                <div class="col-md-8">
                    <h4>Ubícanos</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.001033920506!2d-76.99140958475749!3d-12.112081391423786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7ec999b5913%3A0xd5249b24f4e09794!2sAv.+del+Pinar+152%2C+Santiago+de+Surco+15038!5e0!3m2!1ses-419!2spe!4v1556211515763!5m2!1ses-419!2spe" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <?php else: ?>
                <div class="col-md-4">
                    <h4>Nuestra información</h4>
                    <p><i class="fas fa-map-marker-alt"></i> Avenida del Pinar 152 Piso 5 en Surco</p>
                    <p><i class="fas fa-at"></i> info@dermalaserkpw.com</p>
                    <p><i class="fas fa-phone"></i> (511) 415 3368 </p>
                    <p><i class="far fa-clock"></i> Horario de Atención</p>
                    <p class="pl-3">Lunes-Viernes: 10:00AM a 07:00PM <br> Sabados: 09:00AM a 01:00PM</p>
                </div>
                <div class="col-md-4">
                    <h4>Ubícanos</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.001033920506!2d-76.99140958475749!3d-12.112081391423786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7ec999b5913%3A0xd5249b24f4e09794!2sAv.+del+Pinar+152%2C+Santiago+de+Surco+15038!5e0!3m2!1ses-419!2spe!4v1556211515763!5m2!1ses-419!2spe" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <h4>Déjanos tu consulta</h4>
                    <form action="mail.php" method="post" class="contacto-footer" id="contacto-footer">
                        <div class="form-group">
                            <label for="nombre"><i class="fas fa-user"></i> Nombre Completo</label>
                            <input type="text" name="nombre" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="correo"><i class="fas fa-envelope"></i> Correo</label>
                            <input type="text" class="form-control" name="correo" placeholder="correo@correo.com">
                        </div>
                        <div class="form-group">
                            <label for=""><i class="fas fa-mobile-alt"></i> Telefono</label>
                            <input type="text" class="form-control" placeholder="Ejm. 999999999">
                        </div>
                        <div class="form-group">
                            <label for=""><i class="fas fa-comment"></i> Consulta</label>
                            <textarea name="mensaje" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
                <?php endif ?>
            </div>
        </div>


        <ul class="nav justify-content-center redes-footer">
            <li class="nav-item"><a href="https://www.facebook.com/DermatologaKaterynPerezWillis" class="nav-link"><i class="fab fa-facebook-f"></i></a></li>
            <li class="nav-item"><a href="https://www.instagram.com/dra.katerynperezwillis/" class="nav-link"><i class="fab fa-instagram"></i></a></li>
            <li class="nav-item"><a href="https://api.whatsapp.com/send?phone=51989121842&text=Deseo%20reservar%20una%20cita" class="nav-link"><i class="fab fa-whatsapp"></i> </a></li>
                    
        </ul>
        <p class="footer-derechos text-center">Todos los derechos reservados &copy <a href="https://digitalscrab.com/">Scrabble Marketing</a></p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/noframework.waypoints.min.js"></script>  
    <script src="js/sweetalert2.all.min.js"></script>  
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js" ></script>


</body>
</html>