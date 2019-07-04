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
        Editar Tratamiento
        <small>llena el formulario para editar un tratamiento</small>
      </h1>
    </section>
    

    <div class="row">
        <div class="col-md-8">
          
          <!-- Main content -->
          <section class="content">

            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Edita el tratamiento</h3>

                <?php
                    $id_producto = $_GET['id'];
                    $sql = "SELECT * FROM tratamientos WHERE id_tratamiento = $id_producto";
                    $respuesta = $conn->query($sql);

                    $product = $respuesta->fetch_assoc();
                ?>
                 
              </div>
              <div class="box-body">
                <form role="form" id="guardar-registro-archivo" enctype="multipart/form-data" name="crear-admin" method="post" action="modelo-producto.php">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nombre_producto">Nombre Producto:</label>
                            <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" placeholder="Nombre del tratamiento" value="<?php echo $product['nombre_tratamiento'] ?>">
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
                                        style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $product['contenido'] ?></textarea>
                            
                            </div>
                        </div>

                        <div class="form-group">
                        
                        <select name="categoria" id="">
                          <option value="0">-Seleccionar-</option>
                          <?php
                            $cati="SELECT * FROM categorias";
                            $res=$conn->query($cati);

                            while($cat = $res->fetch_assoc()):
                              if($cat['id_categoria'] == $product['categoria']):
                              ?>
                              <option value="<?php echo $cat['id_categoria']?>" selected><?php echo utf8_encode($cat['categoria']) ?></option> 
                              <?php else: ?>
                              <option value="<?php echo $cat['id_categoria']?>"><?php echo utf8_encode($cat['categoria']) ?></option> 
                                        
                              <?php 
                              endif;
                            endwhile; ?>
                        </select>
                      </div>
                        
                      
                  
                        <div class="form-group">
                            <label for="imagen_producto">Imagen Principal:</label>
                            <img src="../img/tratamientos/<?php echo $product['url_imagen_principal'] ?>" style="display:block; margin: 10px 0;" width="340" alt="">
                            <input type="file" class="form-control" id="imagen_producto" name="archivo_producto">
                            <p class="help-block">1072x640</p>
                        </div>
                        <div class="form-group">
                            <label for="folleto_producto">Casos:</label>
                            <img src="../img/casos/<?php echo $product['url_caso'] ?>" alt="" style="display:block; margin: 10px 0;" width="520">
                            <input type="file" class="form-control" id="ad1" name="caso">
                            <p class="help-block">815x120</p>
                        </div>
                        <div class="form-group">
                            <label for="manual_producto">Imagen predeterminada:</label>
                            <img src="../img/tratamientos/<?php echo $product['url_imagen_secundario'] ?>" style="display:block; margin: 10px 0;" width="250" alt="">
                            <input type="file" class="form-control" id="ad3" name="muestra">
                            <p class="help-block">370x255</p>
                        </div>
                       
                       
			            
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <input type="hidden" name="registro" value="actualizar">
                      <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                      <button type="submit" class="btn btn-primary">Agregar</button>
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