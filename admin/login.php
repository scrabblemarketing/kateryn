<?php 
      session_start();
      if(isset($_GET['cerrar_sesion'])){
        $cerrar_sesion = $_GET['cerrar_sesion'];
          if($cerrar_sesion){
          session_destroy();//con esta funcion cierro la sesion
        }
      }
      
      include_once 'inc/funciones/funciones.php';
      include_once 'inc/templates/header.php'; ?>

  <!-- =============================================== -->

<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a href="../index.php"><b>Scrabble Administrador</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Inicia Sesión</p>
      
    <form action="login-admin.php" method="post" name="login-admin-form" id="login-admin">
      <div class="form-group has-feedback">
          <input type="text" class="form-control" name="usuario-login" placeholder="Usuario" autocomplete = "off">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password-login" placeholder="Contraseña">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
          <div class="col-xs-12">
            <input type="hidden" name="login-admin" value="1">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar Sesión</button>
          </div>
          <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

 <?php include_once 'inc/templates/footer.php'; ?>