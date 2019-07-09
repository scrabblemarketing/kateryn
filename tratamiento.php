<?php 
    include 'includes/templates/header.php';
    require_once('includes/funciones/conexion.php');
?>



<?php if(isset($_GET['title'])){ ?>
    <?php 
        $id = $_GET['title'];
        $sql = "SELECT * FROM tratamientos WHERE id_tratamiento = $id";
        $respuesta = $conn->query($sql);

    while($tratamiento = $respuesta->fetch_assoc()):
?>

    <div class="tratamiento-interno">
        <div class="container py-5">
            <div class="row justify-content-center">
                <section class="col-md-8  animated fadeInLeft">
                    <h2 class="text-uppercase"><?php echo $tratamiento['nombre_tratamiento'] ?></h2>
                    <img src="img/tratamientos/<?php echo $tratamiento['url_imagen_principal'] ?>" class="img-fluid  animated fadeIn" alt="<?php echo $tratamiento['nombre_tratamiento'] ?> ">
                    <!-- <p>La resencia de cicatrices pueden molestarnos dia a dia , es por ello que contamos con laser co2  fraccionado para mejorar , atenuar o disminuir la apariencia de las cicatrices.
                            Se realiza 1 sesion al mes y el numero de sesiones dependerá de la complejidad de la cicatriz 
                            En otros casos también se puede agregar tratamientos tipo inflitraciones  u otros tipo de laser según sea el caso .   
                            LASER SPECTRA PARA MANCHAS O MELASMA O CLOASMA </p>
    
                            <p>Ventajas</p>
                            <ul>
                                <li>resultados rapidos y sorpredentes</li>
                                <li>mínima inflamación de la piel</li>
                                <li>menos agresivo</li>
                                <li>ambulatorio</li>
                            </ul> -->
                        <?php echo $tratamiento['contenido'] ?>
                        <?php if($tratamiento['url_caso'] !== ''): ?>
                        <div class="col-12">
                            <h3 class="text-center text-uppercase">nuestros casos clinicos</h3>
                            <img src="img/casos/<?php echo $tratamiento['url_caso'] ?>" alt="<?php echo $tratamiento['nombre_tratamiento'] ?>" class="my-5 img-fluid d-block mx-auto">
                        </div>
                        <?php endif ?>
    
                           
                </section>
                <aside class="col-md-4 animated fadeInRight">
                    <h3 class="text-center text-uppercase">Solicita información</h3>
                    <form action="sendmail.php" id="form-contacto" class="consulta-form" method="post">
                        <div class="form-group">
                            <input type="text" id="nombre" name="nombre" placeholder="Nombres y Apellidos">
                        </div>
                        <div class="form-group">
                            <input type="text" id="telefono" name="telefono" placeholder="Celular">
                        </div>
                        <div class="form-group">
                            <input type="text" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea id="mensaje" name="mensaje" id="" cols="30" rows="10" placeholder="Consulta"></textarea>
                        </div>
                        <input type="hidden" name="envio" id="envio" value="tratamiento">
                        <input type="submit" class="btn btn-primary btn-enviar d-block" value="Enviar">
                    </form>
                </aside>
                
            </div>
        </div>
    </div>
    
    <?php endwhile; ?>

<?php }else{ ?>


    <?php
        $cat_ql = "SELECT id_categoria, categoria FROM categorias";
        $ql=$conn->query($cat_ql);
        

    ?>
    <div class="bg-tratamiento parallax container-fluid">
        <div class="bg-negro">
        <h1>Tratamientos</h1>
        </div>
    </div>
    <div class="tratamientos container my-5 py-5">
        <div class="row justify-content-center">
            <aside class="menu-tratamientos col-12 py-4">

                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navTratamiento" aria-controls="navTratamiento" aria-expanded="false">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navTratamiento">
                        <ul class="nav w-100 nav-fill">
                        <?php while($categorias = $ql->fetch_assoc()):
                                $g_categorias[] = $categorias;
                            ?>
                            <li class="nav-item">
                                <a href="#categoria<?php echo $categorias['id_categoria'] ?>" class="nav-link men-cat"><?php echo utf8_encode($categorias['categoria']) ?></a>
                            </li>
                            <?php endwhile ?>
                        </ul>
                    </div>
                </nav>
            </aside>
            <!-- .menu-tratamientos end -->

        
            
            <section class="col-md-10 lista-tratamientos">
            <?php
                foreach($g_categorias as $categoria):
                    $id_cat = $categoria['id_categoria'];
                    $quer = "SELECT * FROM tratamientos WHERE categoria = $id_cat";
                    $res = $conn->query($quer);

            ?>
                <div class="categoria animated" id="categoria<?php echo $id_cat?>">
                    <div class="row">
                        <?php while($tratamiento = $res->fetch_assoc()): ?>
                        <div class="col-md-4 mb-4">
                            <a href="tratamiento.php?title=<?php echo $tratamiento['id_tratamiento'] ?>">
                                <div class="card">
                                    <img src="img/tratamientos/<?php echo $tratamiento['url_imagen_secundario'] ?>" class="img-fluid" alt="<?php echo $tratamiento['nombre_tratamiento'] ?>" >
                                    <div class="card-body">
                                        <h2 class="<?php echo (strlen($tratamiento['nombre_tratamiento']) > 25) ? 'titulo-min' : '' ?>"><?php echo $tratamiento['nombre_tratamiento'] ?></h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php endwhile ?>
                       
                    </div>
                </div>
                <?php endforeach ?>
            </section>
            <!-- .lista-tratamientos end -->
            



        </div>
        <!-- .row end  -->
    </div>
    <!-- .tratamientos.container end -->



    <div class="barra-tratamientos container-fluid">
            
    </div>       






    <?php } ?>




<?php

    include 'includes/templates/footer.php';
    
?>