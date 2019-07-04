<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../index.php" class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ZAZÁ</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="../index.php" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
            
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="editar-admin.php?id=<?php echo $_SESSION['id']; ?>" class="btn btn-default btn-flat">Ajustes</a>
              </div>
              <div class="pull-right">
                <a href="login.php?cerrar_sesion=true" class="btn btn-default btn-flat">Cerrar Sesión</a>
              </div>
            </li>
          </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>