<!DOCTYPE html>
    <html dir="ltr" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="robots" content="noindex,nofollow" />
        <title>Biblioteca CBTis-147 - Administración</title>
        <!-- Favicon icon -->
        <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="../../../images/favicon/favicon.ico"
        />
        <!-- Custom CSS -->
        <link href="../../../backend/dist/css/style.min.css" rel="stylesheet" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div
        id="main-wrapper"
        data-layout="vertical"
        data-navbarbg="skin5"
        data-sidebartype="full"
        data-sidebar-position="absolute"
        data-header-position="absolute"
        data-boxed-layout="full"
        >
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header" data-logobg="skin5">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <a class="navbar-brand" href="<?php echo base_url(); ?>/admin">
                <!-- Logo icon -->
                <b class="logo-icon ps-2">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img
                    src="../../../backend/assets/images/logo-icon.png"
                    alt="homepage"
                    class="light-logo"
                    width="25"
                    />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text ms-2">
                    <!-- dark Logo text -->
                    <img
                    src="../../../backend/assets/images/logo-texto3.png"
                    alt="homepage"
                    class="light-logo center"
                    />
                </span>
                <!-- Logo icon -->
                <!-- <b class="logo-icon"> -->
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                <!-- </b> -->
                <!--End Logo icon -->
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a
                class="nav-toggler waves-effect waves-light d-block d-md-none"
                href="javascript:void(0)"
                ><i class="ti-menu ti-close"></i
                ></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div
                class="navbar-collapse collapse"
                id="navbarSupportedContent"
                data-navbarbg="skin5"
            >
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-start me-auto">
                <li class="nav-item d-none d-lg-block">
                    <a
                    class="nav-link sidebartoggler waves-effect waves-light"
                    href="javascript:void(0)"
                    data-sidebartype="mini-sidebar"
                    ><i class="mdi mdi-menu font-24"></i
                    ></a>
                </li>
                
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class="nav-item search-box">
                    <a
                    class="nav-link waves-effect waves-dark"
                    href="javascript:void(0)"
                    ><i class="mdi mdi-magnify fs-4"></i
                    ></a>
                    <form class="app-search position-absolute">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Search &amp; enter"
                    />
                    <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                    </form>
                </li>
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->

                <ul class="navbar-nav float-end">
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a
                    class="
                        nav-link
                        dropdown-toggle
                        text-muted
                        waves-effect waves-dark
                        pro-pic
                    "
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    >
                    <i class="fa fa-user"></i>
                    </a>
                    <ul
                    class="dropdown-menu dropdown-menu-end user-dd animated"
                    aria-labelledby="navbarDropdown">
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>/catalogo">
                        <i class="fa fa-undo me-1 ms-1"></i> Regresar al catalogo</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>/UsuariosController/logout">
                        <i class="fa fa-power-off me-1 ms-1"></i> Cerrar sesión</a>
                    </ul>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                </ul>
            </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav" class="pt-4">
                <li class="sidebar-item">
                    <a
                    class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="<?php echo base_url(); ?>/admin"
                    aria-expanded="false"
                    ><i class="mdi mdi-view-dashboard"></i
                    ><span class="hide-menu">Dashboard</span></a
                    >
                </li>
                <li class="sidebar-item">
                    <a
                    class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="<?php echo base_url(); ?>/admin/categoria/listar"
                    aria-expanded="false"
                    ><i class="mdi mdi-note-outline"></i
                    ><span class="hide-menu">Categoría</span></a
                    >
                </li>
                <li class="sidebar-item">
                    <a
                    class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="<?php echo base_url(); ?>/admin/autor/listar"
                    aria-expanded="false"
                    ><i class="mdi mdi-account"></i
                    ><span class="hide-menu">Autor</span></a
                    >
                </li>
                <li class="sidebar-item">
                    <a
                    class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="<?php echo base_url(); ?>/admin/editorial/listar"
                    aria-expanded="false"
                    ><i class="mdi mdi-bookmark"></i
                    ><span class="hide-menu">Editorial</span></a
                    >
                </li>
                <li class="sidebar-item">
                    <a
                    class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="<?php echo base_url(); ?>/admin/ejemplar/listar"
                    aria-expanded="false"
                    ><i class="mdi mdi-book-open"></i
                    ><span class="hide-menu">Ejemplar</span></a
                    >
                </li>
                <li class="sidebar-item">
                    <a
                    class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="<?php echo base_url(); ?>/admin/libro/listar"
                    aria-expanded="false"
                    ><i class="mdi mdi-book"></i
                    ><span class="hide-menu">Libro</span></a
                    >
                </li>
                <li class="sidebar-item">
                    <a
                        class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="<?php echo base_url(); ?>/admin/usuario/listar"
                        aria-expanded="false"
                        ><i class="mdi mdi-account-circle"></i
                        ><span class="hide-menu">Usuarios</span></a
                    >
                </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
