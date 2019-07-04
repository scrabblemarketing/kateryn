<?php 
   include('inc/funciones/funciones.php');
   include('inc/funciones/sessiones.php');
   include('inc/templates/header.php');
   include('inc/templates/barra.php');
   include('inc/templates/sidebar.php'); 
 ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear Categorias
      </h1>
    </section>
    

    <div class="row">
        <div class="col-md-8">
          
          <!-- Main content -->
          <section class="content">

            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Crear Categoria</h3>

                 
              </div>
              <div class="box-body">


                    <form action="modelo-categoria.php" method="post" name="login-admin-form" id="guardar-registro">
                        <div class="box-body">
                            <div class="row">
                                <div class="form-group col-md-6 has-feedback">
                                    <input type="text" class="form-control" name="categoria" placeholder="Categoria">
                                    
                                </div>
                                
                                    <div class="col-md-2">
                                        <input type="hidden" name="registro" value="nuevo">
                                        <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                        </div>
                    </form>
                    <table id="example1" class="table tabla-cat table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Categorias</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            try{

                                $sql = ("SELECT * FROM categorias");
                                $resultado = $conn->query($sql);

                            }catch(Exception $e){
                                echo "Error: " . $e->getMessage();
                            }
                            
                            while($clientes = $resultado->fetch_assoc()):
                            ?>
                                <tr>
                                    <td><?php echo ($clientes['categoria']) ?></td>
                                    <td>
                                        <a href="editar-categoria.php?id=<?php echo $clientes['id_categoria']  ?>"class="btn bg-orange btn-flat margin"> <i class="fa fa-pencil"></i></a>
                                        <a href="#" data-id="<?php echo $clientes['id_categoria']  ?>" data-type="clientes" class="btn bg-maroon btn-flat margin borrar_registro"><i class="fa fa-trash"></i> </a>
                                    </td>
                                </tr>





                            <?php endwhile; ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Categorias</th>
                            <th>Acción</th>
                        </tr>
                        </tfoot>
                    </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

          </section>
          <!-- /.content -->
          </div>
    </div>
  </div>
  <!-- /.content-wrapper -->


  <?php 
      
include('inc/templates/footer.php'); 
 ?>