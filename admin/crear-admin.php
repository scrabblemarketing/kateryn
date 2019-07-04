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
        Crear Administradores
        <small>llena el formulario para crear un admin</small>
      </h1>
    </section>
    

    <div class="row">
        <div class="col-md-8">
          
          <!-- Main content -->
          <section class="content">

            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Crear Administrador</h3>

                 
              </div>
              <div class="box-body">
                  <form action="modelo-admin.php" method="post" name="login-admin-form" id="guardar-registro">
                  <div class="box-body">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" name="nombre-login" placeholder="Nombre">
                            
                        </div>
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" name="usuario-login" placeholder="Usuario">
                            
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="password-login" placeholder="Contraseña">
                            
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <input type="hidden" name="registro" value="nuevo">
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