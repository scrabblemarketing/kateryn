<?php 
include('inc/funciones/funciones.php');
include('inc/funciones/sessiones.php');
include('inc/templates/header.php');
include('inc/templates/barra.php');
include('inc/templates/sidebar.php'); 

?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Lista de Administradores</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                    <h3 class="box-title">Edita o elimina administradores</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Usuario</th>
                            <th>Acción</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            try{

                                $sql = ("SELECT * FROM registro_admin");
                                $resultado = $conn->query($sql);

                            }catch(Exception $e){
                                echo "Error: " . $e->getMessage();
                            }
                            
                            while($admins = $resultado->fetch_assoc()):
                            ?>
                                <tr>
                                    <td><?php echo $admins['nombre'] ?></td>
                                    <td><?php echo $admins['apellido'] ?></td>
                                    <td><?php echo $admins['usuario'] ?></td>
                                    <td>
                                        <a href="editar-admin.php?id=<?php echo $admins['id_admin']  ?>"class="btn bg-orange btn-flat margin"> <i class="fa fa-pencil"></i></a>
                                        <a href="#" data-id="<?php echo $admins['id_admin']  ?>" data-type="admin" class="btn bg-maroon btn-flat margin borrar_registro"><i class="fa fa-trash"></i> </a>
                                    </td>
                                </tr>





                            <?php endwhile; ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Usuario</th>
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