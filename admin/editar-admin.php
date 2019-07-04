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
        Crear Evento
        <small>llena el formulario para crear un evento</small>
      </h1>
    </section>
    

    <div class="row">
        <div class="col-md-8">
          
          <!-- Main content -->
          <section class="content">

            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Crear Evento</h3>

                <?php
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM registro_admin WHERE id_admin = $id;";
                    $resultado = $conn->query($sql);

                    $admin = $resultado->fetch_assoc();
                ?>
                 
              </div>
              <div class="box-body">
                  <form action="modelo-admin.php" method="post" name="login-admin-form" id="guardar-registro">
                  <div class="box-body">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" name="nombre-admin" placeholder="Nombre" value="<?php echo $admin['nombre']?>">
                            
                        </div>
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" name="apellido-admin" placeholder="Apellido" value="<?php echo $admin['apellido']?>">
                            
                        </div>
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" name="usuario-admin" placeholder="Usuario" value="<?php echo $admin['usuario']?>">
                            
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="password-admin" placeholder="Contraseña" value="">
                            
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <input type="hidden" name="registro" value="actualizar">
                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                            </div>
                            <!-- /.col -->
                        </div>
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