<?php 
include('inc/funciones/funciones.php');
include('inc/funciones/sessiones.php');
include('inc/templates/header.php');
include('inc/templates/barra.php');
include('inc/templates/sidebar.php'); 

?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Lista de Clientes</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                    <h3 class="box-title">Edita o elimina clientes</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Nombres</th>
                            <th>Empresa</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>Mensaje</th>
                            <th>Acción</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            try{

                                $sql = ("SELECT * FROM clientes");
                                $resultado = $conn->query($sql);

                            }catch(Exception $e){
                                echo "Error: " . $e->getMessage();
                            }
                            
                            while($clientes = $resultado->fetch_assoc()):
                            ?>
                                <tr>
                                    <td><?php echo $clientes['nombres_cliente'] . " " .$clientes['apellidos_cliente'] ?></td>
                                    <td><?php echo $clientes['empresa'] ?></td>
                                    <td><?php echo $clientes['email_cliente'] ?></td>
                                    <td><?php echo $clientes['telefono'] ?></td>
                                    <td><?php echo $clientes['direccion'] ?></td>
                                    <td><?php echo $clientes['mensaje'] ?></td>
                                    <td>
                                        <a href="editar-clientes.php?id=<?php echo $clientes['id_cliente']  ?>"class="btn bg-orange btn-flat margin"> <i class="fa fa-pencil"></i></a>
                                        <a href="#" data-id="<?php echo $clientes['id_cliente']  ?>" data-type="clientes" class="btn bg-maroon btn-flat margin borrar_registro"><i class="fa fa-trash"></i> </a>
                                    </td>
                                </tr>





                            <?php endwhile; ?>
                        </tbody>
                        <tfoot>
                        <tr>
                        <th>Nombres</th>
                            <th>Empresa</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>Mensaje</th>
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