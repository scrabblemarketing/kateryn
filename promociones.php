<?php 
    include 'includes/templates/header.php';
    require_once('includes/funciones/conexion.php');
?>              
                
                
                
                
                
<section class="promocion-principal my-4">
<?php
    
    $sql = "SELECT * FROM promociones";
    $respuesta = $conn->query($sql);


?>
    <div class="container">
        <h2>Promociones</h2>
        <div class="promo-carousel owl-carousel">
        <?php while($promo = $respuesta->fetch_assoc()): ?>
            <div class="item">
                <div class="card-promo">
                    <img src="img/tratamientos/<?php echo $promo['imagen_promo'] ?>" alt="" class="img-fluid">
                    <div class="card-promo-body">
                        <h5><?php echo $promo['titulo_promo'] ?></h5>
                        <h4>S/. <?php echo $promo['precio'] ?></h4>
                    </div>
                </div>
            </div>
            <?php endwhile ?>
            
        </div>
    </div>
</section>

                
<?php

    include 'includes/templates/footer.php';

?>