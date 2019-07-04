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
        Dashboard
        <small>Panel de Control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Inicio</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Resúmen</h3>

           
        </div>
        <div class="box-body">
          <div class="row">
                <div class="col-lg-3 col-xs-6">


                  <?php
                    $sql = "SELECT COUNT(id_cliente) AS registro FROM clientes";
                    $resultado = $conn->query($sql);
                    $registrados = $resultado->fetch_assoc(); 
                  ?>

                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3><?php echo $registrados['registro'] ?></h3>
                      <p>Total Clientes</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-user"></i>
                    </div>
                    <a href="lista-clientes.php" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                  <!-- .small-box.bg-aqua -->
                </div>
                <!-- .col-lg-3 -->

                <div class="col-lg-3 col-xs-6">
                  <?php
                    $sql = "SELECT COUNT(id_tratamiento) AS registro FROM tratamientos";
                    $resultado = $conn->query($sql);
                    $registrados = $resultado->fetch_assoc(); 
                  ?>

                  <div class="small-box bg-yellow">
                    <div class="inner">
                      <h3><?php echo $registrados['registro'] ?></h3>
                      <p>Total Productos</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-book"></i>
                    </div>
                    <a href="lista-productos.php" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                  <!-- .small-box.bg-aqua -->
                </div>
                <!-- .col-lg-3 -->
              

                <div class="col-lg-3 col-xs-6">
                    <?php
                      $sql = "SELECT COUNT(id_admin) AS registro FROM admin";
                      $resultado = $conn->query($sql);
                      $registrados = $resultado->fetch_assoc(); 
                    ?>

                    <div class="small-box bg-red">
                      <div class="inner">
                        <h3><?php echo $registrados['registro'] ?></h3>
                        <p>Total Administradores</p>
                      </div>
                      <div class="icon">
                        <i class="fa fa-address-card"></i>
                      </div>
                      <a href="lista-admin.php" class="small-box-footer">Más Info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    <!-- .small-box.bg-aqua -->
                </div>
                <!-- .col-lg-3 -->

          </div>
          <!-- .row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
  </div>
  <!-- /.content-wrapper -->
 


  <?php include('inc/templates/footer.php') ?>