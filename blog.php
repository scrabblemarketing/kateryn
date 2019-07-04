<?php
    include 'includes/templates/header.php';

    require_once('includes/funciones/conexion.php');
?>

<?php if($_GET['title']== 'tecnologia'): ?>
<div class="container my-5">
    <div class="row">
    <aside class="menu-tratamientos col-md-3 py-4">

        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navTratamiento" aria-controls="navTratamiento" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navTratamiento">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="#tecnologia1" class="nav-link">Deka Motus Depilación</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tecnologia2" class="nav-link">INFINI</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tecnologia3" class="nav-link">Láser CO2 Fraccionado</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tecnologia4" class="nav-link">Spectra</a>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>


    

    <section class="col-md-9 tecnologias">
        <div class="card animated" id="tecnologia1">
            <img src="img/blog/laser1.png" class="img-fluid" alt="" >
            <div class="card-body">
                <h2>Deka Motus Depilación</h2>
                <p>El mercado de la depilación es extremadamente complejo. El gran número de marcas existentes que presentan sus productos producen una competición feroz. Cada clínica pretende ofrecer el mejor cuidado a sus pacientes, pero es complicado discernir entre las diferencias que ofrecen estos sistemas.</p>
                
                <p>Ventajas</p>
                <ul>
                    <li>La única longitud de onda que es efectiva en el tratamiento de vello fino y ligero. De hecho, ningún otro tipo de láser puede combinar una eficiente absorción de la melanina (a 755 nm), un alto pico de potencia (más de 6,000 W) y la posibilidad de seleccionar una longitud de pulso corta (hasta 2 ms).</li>
<li>El cabezal Moveo permite que el vello no deseado sea eliminado por medio de un nuevo método que es más fácil, más rápido, más seguro y más efectivo (tratamiento indoloro, adecuado también para los tipos de piel más oscuros).</li>
<li>Una tecnología innovadora que simplifica estructuralmente el centro del sistema láser, reduciendo costes y problemas de mantenimiento.</li>
<li>Un sistema compacto y portátil.</li>
            </div>
        </div>

        <div class="card animated" id="tecnologia2">
            <img src="img/blog/laser2.png" class="img-fluid" alt="" >
            <div class="card-body">
                <h2>INFINI</h2>
               <p>INFINI es una tecnología exclusiva que le permite controlar el procedimiento de rejuvenecimiento de la piel. Usted controla la profundidad del tratamiento y los niveles de energía para adoptar un enfoque en varias capas que permite personalizar los tratamientos, independientemente del tipo o el color de la piel. Ahora puede ofrecer la mejor solución, que logrará que los pacientes vuelven y lo recomienden a nuevos pacientes.</p>
            </div>
        </div>

        <div class="card animated" id="tecnologia3">
            <img src="img/blog/laser4.png" class="img-fluid" alt="">
            <div class="card-body">
                <h2>Láser CO2 Fraccionado</h2>
                <p>El láser fraccionado de CO2 emite minúsculos haces de luz que penetran en la piel hasta la dermis en forma de cientos de columnas térmicas. Estas columnas son pequeñas heridas microscópicas que quedan rodeadas de tejido sano, que es el tejido que contiene los queratinocitos, las células capaces de promover un rápida cicatrización y una alta producción de colágeno.
<p>
Antes de empezar con el tratamiento con el láser fraccionado de CO2 es indispensable una valoración médica para determinar si es necesaria una preparación previa de la piel con productos tópicos específicos</p>
                
            </div>
        </div>

        <div class="card animated" id="tecnologia4">
            <img src="img/blog/laser3.png" class="img-fluid" alt="">
            <div class="card-body">
                <h2>Spectra </h2>
                <p>El láser SPECTRA™ está diseñado para atender las crecientes demandas de las clínicas, e incluye distintas y eficaces opciones de tratamiento, parámetros personalizables, seguridad integrada y tiempos de recuperación reducidos al mínimos a un precio asequible.</p>
                <p>Con nuestras cuatro longitudes de onda diferentes (1064 nm, 532 nm, 585 nm, 650 nm) en modo de conmutación Q, el sólido sistema Spectra cuenta con la versatilidad para proporcionar a su consultorio una amplia gama de opciones clínicas para tratar a sus pacientes. Lutronic expande continuamente sus aplicaciones de tratamientos, y el sistema Spectra es el primer láser Nd:YAG con conmutación Q adecuado para el tratamiento de melasma. El sistema Spectra con tecnología avanzada ofrece una ventaja en comparación con otros sistemas de láser y proporciona resultados clínicos mejorados.</p>
            </div>
        </div>
    </section>





    </div>
</div>


<?php elseif($_GET['title'] == 'blogs'): ?>

<?php 
   


    $sql = "SELECT * FROM blogs";
    $resultado = $conn->query($sql);

?>



<div class="container my-5">
    <h2 class="text-center my-3">Últimas Noticias</h2>
    <?php while($blogs = $resultado->fetch_assoc()): ?>
    <div class="division-blogs">
        <div class="row">
            <div class="col-md-4">
                <img src="img/muestra/<?php echo $blogs['url_imagen_muestra'] ?>" class="img-fluid" alt="<?php echo $blogs['titulo_blog'] ?>">
            </div>
            <div class="col-md-8 p-4">
                <h3><?php echo $blogs['titulo_blog'] ?></h3>
                <div class="content">
                <?php echo substr($blogs['contenido'], 0, 285) ?>...
                </div>
                

                <a href="blog.php?<?php echo 'title=blog&id=' . $blogs['id_blog'] .'&titulo=' . str_replace(' ','-',$blogs['titulo_blog']) ?>" class="btn btn-primary btn-enviar">Ver más</a>
            </div>
        </div>
        <!-- .row -->
    </div>
    <!-- .division-blogs -->
    <?php endwhile ?>

   
</div>








<?php elseif($_GET['title'] == 'blog'): ?>

<?php 
   

    $id = $_GET['id'];
    // echo $id;
    $sql = "SELECT * FROM blogs WHERE id_blog=$id";
    // echo $sql;
    $resultado = $conn->query($sql);
    $blog = $resultado->fetch_assoc();
?>

<div class="container my-5">
    <div class="row justify-content-center blog-entry">
        <div class="col-12">
            <h1><?php echo $blog['titulo_blog'] ?></h1>
            <img src="img/blog/<?php echo $blog['url_imagen_principal'] ?>" class="img-fluid" alt="">
        </div>
        <div class="col-md-7">
            <?php echo $blog['contenido'] ?>

        </div>

        <div class="col-12 my-5">
            <h2 class="text-center">Últimas Noticias</h2>
            
            <?php include('includes/templates/carousel.php')?>
               
               
                
                
                
        </div>
    </div>
</div>





<?php endif ?>










<?php 
    include 'includes/templates/footer.php';
?>