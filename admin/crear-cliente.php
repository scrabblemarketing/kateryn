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

                 
              </div>
              <div class="box-body">
                  <form action="modelo-clientes.php" method="post" name="login-admin-form" id="guardar-registro">
                  <div class="box-body">
                        <div class="form-group has-feedback">
                            <input type="text" name="nombre" placeholder="Nombres" id="nombre" class="form-control">
                        </div>
                        <div class="form-group has-feedback">
                            <input type="text" name="apellidos" placeholder="Apellidos" id="apellidos" class="form-control">
                        </div>
                        <div class="form-group has-feedback">
                        <input type="text" name="empresa" placeholder="Nombre de la Empresa" id="empresa" class="form-control">  
                        </div>
                        <div class="form-group has-feedback">
                            <input type="text" name="email" placeholder="Email" id="email" class="form-control"> 
                        </div>
                        <div class="form-group has-feedback">
                            <input type="text" name="telefono" placeholder="Teléfono" id="telefono" class="form-control">
                        </div>
                        <div class="form-group has-feedback">
                            <input type="text" name="direccion" placeholder="Dirección" id="direccion" class="form-control">
                        </div>
                        <div class="form-group has-feedback">
                            <textarea name="mensaje" id="mensaje" placeholder="Mensaje" class="form-control"></textarea>
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









