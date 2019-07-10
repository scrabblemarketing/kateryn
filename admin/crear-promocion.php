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
        Crear Promoción
      </h1>
    </section>
    

    <div class="row">
        <div class="col-md-10">
          
          <!-- Main content -->
          <section class="content">

            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Crear Promoción</h3>

                 
              </div>
              <div class="box-body">
                <form role="form" id="guardar-registro-archivo" enctype="multipart/form-data" name="crear-admin" method="post" action="modelo-promociones.php">
                    <div class="box-body">

                        <div class="form-group">
                            <label for="id_tratamiento">Tratamiento:</label>
                            <?php
                                $sql = "SELECT id_tratamiento, nombre_tratamiento, url_imagen_secundario FROM tratamientos";
                                $respuesta = $conn->query($sql);
                                while($trt = $respuesta->fetch_assoc()){
                                    $tratamientos[] = $trt;
                                }
                            ?>
                           
                              <select class="form-control" id="titulo" name="id_tratamiento">
                                <option value="0">--Selecciona--</option>
                                <?php foreach($tratamientos as $tratamiento): ?>
                                <option value="<?php echo $tratamiento['id_tratamiento'] ?>"><?php echo $tratamiento['nombre_tratamiento'] ?></option>
                                <?php endforeach ?>
                                
                              </select>
                        
                        </div>
                        <div class="form-group">
                          <label for="titulo">Titulo:</label>
                          <input type="text" name="titulo" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="precio">Precio:</label>
                          <input type="text" name="precio" class="form-control">
                        </div>

                        <div class="form-group">
                          <label for="imagen_promo">Imagen:</label>
                          <?php foreach($tratamientos as $tratamiento): ?>
                                <img src="../img/tratamientos/<?php echo $tratamiento['url_imagen_secundario'] ?>" data-id="<?php echo $tratamiento['id_tratamiento'] ?>" class="img-fluid" style="display:none" width="250" />
                          <?php endforeach ?>
                          <input type="file" name="imagen_promo" id="imagenPre" class="form-control">
                          <small class="ai-font-smaller">365x430</small>
                        </div>
                       
			            
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <input type="hidden" name="registro" value="nuevo">
                      <button type="submit" class="btn btn-primary btn-flat">Crear</button>
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