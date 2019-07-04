<?php 
include('inc/funciones/funciones.php');
include('inc/funciones/sessiones.php');
include('inc/templates/header.php');
include('inc/templates/barra.php');
include('inc/templates/sidebar.php'); 

?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Lista de Tratamientos</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                    <h3 class="box-title">Edita o elimina Tratamientos</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Contenido</th>
                            <th>Categoria</th>
                            <th>Principal</th>
                            <th>Imagen Muestra</th>
                            <th>Acción</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            try{

                                $sql = "SELECT * FROM tratamientos";
                                $sql.= " INNER JOIN categorias ";
                                $sql.=" ON tratamientos.categoria=categorias.id_categoria";

                                $resultado = $conn->query($sql);

                            }catch(Exception $e){
                                echo "Error: " . $e->getMessage();
                            }
                            
                            while($productos = $resultado->fetch_assoc()):
                            ?>
                                <tr>
                                    <td><?php echo $productos['nombre_tratamiento'] ?></td>
                                    <td><a href="#" data-content="<?php echo $productos['id_tratamiento'] ?>">Ver Contenido</a></td>
                                    <td><?php echo utf8_encode($productos['categoria']) ?></td>
                                    <td><img src="../img/tratamientos/<?php echo $productos['url_imagen_principal'] ?>" width="300" alt=""></td>
                                    
                                    <td> <img src="../img/tratamientos/<?php echo $productos['url_caso'] ?>" width="150" alt=""></td>
                                    <td><img src="../img/muestra/<?php echo $productos['url_muestra']?>" alt=""></td>
                                    <td>
                                        <a href="editar-producto.php?id=<?php echo $productos['id_tratamiento']  ?>"class="btn bg-orange btn-flat margin"> <i class="fa fa-pencil"></i></a>
                                        <a href="#" data-id="<?php echo $productos['id_tratamiento']  ?>" data-type="producto" class="btn bg-maroon btn-flat margin borrar_registro"><i class="fa fa-trash"></i> </a>
                                    </td>
                                </tr>





                            <?php endwhile; ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Nombre</th>
                            <th>Contenido</th>
                            <th>Categoria</th>
                            <th>Principal</th>
                            <th>Imagen Muestra</th>
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