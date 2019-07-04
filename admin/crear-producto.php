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
        Crear Tratamiento
        <small>llena el formulario para crear un Tratamiento</small>
      </h1>
    </section>
    

    <div class="row">
        <div class="col-md-10">
          
          <!-- Main content -->
          <section class="content">

            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Crear Tratamiento</h3>

                 
              </div>
              <div class="box-body">
                <form role="form" id="guardar-registro-archivo" enctype="multipart/form-data" name="crear-admin" method="post" action="modelo-producto.php">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nombre_producto">Nombre Tratamiento:</label>
                            <input type="text" class="form-control" id="nombre_tratamiento" name="nombre_tratamiento" placeholder="Nombre del Tratamiento">
                        </div>
                        <div class="form-group">
                            <div class="box-header">
                            <h3 class="box-title">Contenido
                            </h3>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                        title="Collapse">
                                <i class="fa fa-minus"></i></button>
                            </div>
                            <!-- /. tools -->
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body pad">
                                <textarea class="textarea" placeholder="Contenido del tratamiento" name="contenido"
                                        style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="categoria">Categoria</label>
                          <select name="categoria" id="">
                            <option value="0">-Seleccionar-</option>
                            <?php
                              $sql="SELECT * FROM categorias";
                              $resultado=$conn->query($sql);

                              while($cat = $resultado->fetch_assoc()):
                                var_dump($cat);
                                ?>
                                          <option value="<?php echo $cat['id_categoria']?>"><?php echo utf8_encode($cat['categoria']) ?></option> 
                                <?php endwhile ?>
                          </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="imagen_producto">Imagen Principal:</label>
                            <input type="file" class="form-control" id="imagen_producto" name="archivo_producto">
                            <p class="help-block">1072x640</p>
                        </div>
                        <div class="form-group">
                            <label for="folleto_producto">Casos:</label>
                            <input type="file" class="form-control" id="ad1" name="caso">
                            <p class="help-block">815x120</p>
                        </div>
                        <div class="form-group">
                            <label for="manual_producto">Imagen predeterminada:</label>
                            <input type="file" class="form-control" id="ad3" name="muestra">
                            <p class="help-block">370x255</p>
                        </div>
                       
			            
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <input type="hidden" name="registro" value="nuevo">
                      <button type="submit" class="btn btn-primary btn-flat">Agregar</button>
                    </div>

                  </form>
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