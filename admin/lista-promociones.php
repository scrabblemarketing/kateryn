<?php 
include('inc/funciones/funciones.php');
include('inc/funciones/sessiones.php');
include('inc/templates/header.php');
include('inc/templates/barra.php');
include('inc/templates/sidebar.php'); 

?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Lista de promociones</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Promoción</th>
                            <th>Precio</th>
                            <th>Imagen</th>
                            <th>Acción</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            try{

                                $sql = "SELECT * FROM promociones";

                                $resultado = $conn->query($sql);

                            }catch(Exception $e){
                                echo "Error: " . $e->getMessage();
                            }
                            
                            while($productos = $resultado->fetch_assoc()):
                            ?>
                                <tr>
                                    <td><?php echo $productos['titulo_promo'] ?></td>
                                    <td><?php echo $productos['precio']?></td>
                                    <td><img src="../img/tratamientos/<?php echo $productos['imagen_promo']?>" width="100" style="display:block;margin:0 auto;" alt=""></td>
                                    <td>
                                        <a href="editar-promocion.php?id=<?php echo $productos['id_promo']  ?>"class="btn bg-orange btn-flat margin"> <i class="fa fa-pencil"></i></a>
                                        <a href="#" data-id="<?php echo $productos['id_promo']  ?>" data-type="promociones" class="btn bg-maroon btn-flat margin borrar_registro"><i class="fa fa-trash"></i> </a>
                                    </td>
                                </tr>





                            <?php endwhile; ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Promoción</th>
                            <th>Precio</th>
                            <th>Imagen</th>
                            <th>Acción</th>
                        </tr>
                        </tfoot>
                    </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- col-xs-12 -->
        </div>
        <!-- .row -->
    </section>
            <!-- .content -->


</div>
<!-- .content-wrapper -->














<?php 

include('inc/templates/footer.php'); 

?>