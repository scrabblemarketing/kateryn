<?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace('.php','',$archivo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138695170-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-138695170-1');
</script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Centro Dermatológico de la Doctora Katherin Perez Willis, especializada en tratamientos para la piel como manchas, acné, melasma y demás. Tratamientos láser y estéticos.">
    <title>Dra Kateryn</title>
    <?php include 'includes/icon.php' ?>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Gothic+A1:400,700|Dancing+Script|Oswald:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head> 
<body class="<?php echo ($pagina == 'index') ? $pagina : '' ?>">

    <header class="<?php echo ($pagina == 'index') ? 'inicio-header' : '' ?>">
    
        <div class="nav-principal container-fluid">
            <div class="row">
                <div class="col-8 col-md-4">
                    <a href="index.php">
                            <img src="img/logo.png" class="img-fluid" alt="Logo de Katherin Perez Willis">
                    </a>
                    
                </div>
                <div class="col-4 col-md-8">
                    <nav class="navbar navbar-expand-lg navbar-light align-middle h-100">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-principal" aria-controls="nav-principal" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navbar-collapse collapse menu-principal" id="nav-principal">
                            <ul class="navbar-nav mr-auto w-100 justify-content-center nav-fill">
                                <li class="nav-item">
                                    <a href="nosotros.php" class="text-right text-md-center nav-link">Nosotros</a>
                                </li>
                                <li class="nav-item">
                                    <a href="tratamiento.php" class="text-right text-md-center nav-link">Tratamientos</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog.php?title=tecnologia" class="text-right text-md-center nav-link">Tecnología</a>
                                </li>
                                <li class="nav-item">
                                    <a href="contacto.php" class="text-right text-md-center nav-link">Contacto</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div id="carouselPrincipal" class="carousel slide <?php echo ($pagina !== 'index') ? 'd-none' : '' ?>" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div></div>
                        <!-- <img src="img/principal1.jpeg" class="d-block img-fluid" alt="Imagen principal de la Doctora Katherin Perez Willis"> -->
                    </div>
                    <div class="carousel-item">
                        <div></div>
                        <!-- <img src="img/principal2.jpg" class="d-block w-100" alt="Imagen principal de la Doctora Katherin Perez Willis"> -->
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselPrincipal" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselPrincipal" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            
        </div>

    </header>