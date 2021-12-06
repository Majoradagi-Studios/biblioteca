<?php $session = session();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Android  -->
    <meta name="theme-color" content="red">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- iOS -->
    <meta name="apple-mobile-web-app-title" content="Application Title">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">

    <!-- Windows  -->
    <meta name="msapplication-navbutton-color" content="red">
    <meta name="msapplication-TileColor" content="red">
    <meta name="msapplication-TileImage" content="ms-icon-144x144.png">
    <meta name="msapplication-config" content="browserconfig.xml">

    <!-- Pinned Sites  -->
    <meta name="application-name" content="Application Name">
    <meta name="msapplication-tooltip" content="Tooltip Text">
    <meta name="msapplication-starturl" content="/">

    <!-- Tap highlighting  -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- UC Mobile Browser  -->
    <meta name="full-screen" content="yes">
    <meta name="browsermode" content="application">

    <!-- Disable night mode for this page  -->
    <meta name="nightmode" content="enable/disable">

    <!-- Fitscreen  --
    <meta name="viewport" content="uc-fitscreen=yes"/>-->

    <!-- Layout mode -->
    <meta name="layoutmode" content="fitscreen/standard">

    <!-- imagemode - show image even in text only mode  -->
    <meta name="imagemode" content="force">

    <!-- Orientation  -->
    <meta name="screen-orientation" content="portrait">
    
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />

    <title>Catálogo - Biblioteca CBTis147</title>

    <!-- Splash screen  -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="apple-touch-startup-image" href="splash_640x1136.jpg" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="splash_750x1334.jpg" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="splash_1242x2208.jpg" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="splash_1125x2436.jpg" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="splash_1536x2048.jpg" media="(min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="splash_1668x2224.jpg" media="(min-device-width: 834px) and (max-device-width: 834px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
    <link rel="apple-touch-startup-image" href="splash_2048x2732.jpg" media="(min-device-width: 1024px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
    


    <link rel="shortcut icon" href="img/favicon/favicon.png" type="image/png">

    <link rel="stylesheet" type="text/css" href="font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--<link rel="stylesheet" type="text/css" href="css/responsive.css">-->

    <link rel="manifest" href="manifest.json">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/scripts.js"></script>

    <script src="https://kit.fontawesome.com/8d43b1ab38.js" crossorigin="anonymous"></script>

</head>
<body class="sb-nav-fixed">

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-1 " href="<?php echo base_url(); ?>/catalogo"><img src="img/logoCBTis.png"></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user fa-fw"></i>Bienvenido: <?php echo $session->get('nombre')." ".$session->get('apellidoP');?></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <?php if($session->get('rol') >= 1  ): ?>
                    <li><a class="dropdown-item" href="<?php echo base_url(); ?>/admin">Administrar</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <?php endif;?>
                    <li><a class="dropdown-item" href="<?php echo base_url(); ?>/UsuariosController/logout">Cerrar sesión</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Sidebar-->
    <div id="layoutSidenav">
        
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading text-white">Categorías</div>

                        <?php foreach($categorias as $categoria): ?>
                        <a class="nav-link" href="<?=base_url('/catalogo/buscar/'.$categoria['idCategoria']);?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                            <?=$categoria['codigoD'].' '.$categoria['nombreC'];?>
                        </a>
                        <?php endforeach;?>

                    </div>
                </div>
            </nav>
        </div>
        <!-- Contenido -->
        <div id="layoutSidenav_content">
            <main>
                   
                <div class="container-fluid px-5 mt-4 mb-4">
                    <!-- Aqui inicia el contenido -->                    
                    <h1>Catálogo de libros</h1>
                    <small class="">Todos los libros existentes</small>

                    <!--libro-->
                    <div class="row mt-4">
                        <?php foreach($libros as $libro): ?>
                            <div class="col">
                                <div class="card" style="width: 17rem;">
                                    <img src="<?=base_url()?>/uploads/<?=$libro['imagen'];?>" class="card-img-top" alt="No existe imagen">
                                    <div class="card-body">
                                        <h5 class="card-title"><?=$libro['titulo'];?></h5>
                                        
                                        <?php $autor = $autores->where('idAutor',$libro['idAutor'])->first();?>
                                        <p class="card-text">Por: <?=$autor['apellidoA'].' '.$autor['nombreA'];?></p>

                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <a href="<?=base_url('/catalogo/detalle/'.$libro['idLibro']);?>" class="btn btn-warning"><strong>Detalles</strong></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </main>
            <!--Fin del contenido-->

            <footer class="py-5 bg-footer mt-5">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-white">Copyright &copy; Your Website 2021</div>
                        <div>
                            <a href="#" class="text-white">Privacy Policy</a>
                            &middot;
                            <a href="#" class="text-white">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    
</body>
</html>