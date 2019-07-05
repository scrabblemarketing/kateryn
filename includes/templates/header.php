<?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace('.php','',$archivo);
?>


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dermaláser KPW</title>
    <?php include 'includes/icon.php' ?>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Gothic+A1:400,700|Dancing+Script|Oswald:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/estilos-2.css">
</head>
<body class="pag-<?php echo $pagina ?>">
    
    <header>
        <div class="barra bg-principal">
            <div class="row justify-content-end">
                <div class="col-12 col-sm-6 col-md-4 pr-5">
                    <ul class="nav justify-content-end">
                        <li class="nav-item"><a href="https://www.facebook.com/DermatologaKaterynPerezWillis" class="nav-link"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="nav-item"><a href="https://www.instagram.com/dra.katerynperezwillis/" class="nav-link"><i class="fab fa-instagram"></i></a></li>
                        <li class="nav-item"><a href="https://api.whatsapp.com/send?phone=51989121842&text=Deseo%20reservar%20una%20cita" class="nav-link"><i class="fab fa-whatsapp"></i> </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="menu-logo container-fluid">
            <div class="row">
                <div class="col-8 col-md-3">
                    <a href="index.php">
                            <img src="img/logo.png" class="img-fluid" alt="Logo de Katherin Perez Willis">
                    </a>
                </div>
                <div class="col-4 col-md-9">
                    <nav class="navbar navbar-expand-lg navbar-light mt-5">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-header" aria-controls="menu-header" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="menu-header">
                            <ul class="navbar-nav w-100 mr-auto justify-content-center nav-fill">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a href="nosotros.php" class="nav-link">Nosotros</a>
                                </li>
                                <li class="nav-item">
                                    <a href="tratamiento.php" class="nav-link">Tratamientos</a>
                                </li>
                                <li class="nav-item">
                                    <a href="promociones.php" class="nav-link">Promociones</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog.php" class="nav-link">Tecnologías</a>
                                </li>
                                <li class="nav-item">
                                    <a href="contacto.php" class="nav-link">Contacto</a>
                                </li>
                            </ul>

                        </div>
                        
                    </nav>
                </div>
            </div>
        </div>
    </header>