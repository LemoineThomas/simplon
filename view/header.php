<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="bootstrap-datetimepicker.min.css">
<script src="bootstrap-datetimepicker.min.js"></script>

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link rel="shortcut icon" href="images/icon/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <h2>ADMIN</h2>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="nav-item active">
                        <a class="nav-link" href="index.php">
                          <i class="fas fa-fw fa-tachometer-alt"></i>
                          <span>Dashboard</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php?clients=accueil">
                          <i class="fas fa-fw fa-users"></i>
                          <span>Clients</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php?promos=accueil">
                          <i class="fas fa-fw fa-table"></i>
                          <span>Promotions</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php?categories=accueil">
                          <i class="fas fa-fw fa-archive"></i>
                          <span>Catégories</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">
                          <i class="fas fa-fw fa-area-chart"></i>
                          <span>Reporting</span></a>
                      </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- FIN HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <h2>ADMIN</h2>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                      <li class="nav-item active">
                        <a class="nav-link" href="index.php">
                          <i class="fas fa-fw fa-tachometer-alt"></i>
                          <span>Dashboard</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php?clients=accueil">
                          <i class="fas fa-fw fa-users"></i>
                          <span>Clients</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php?promos=accueil">
                          <i class="fas fa-fw fa-table"></i>
                          <span>Promotions</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php?categories=accueil">
                          <i class="fas fa-fw fa-archive"></i>
                          <span>Catégories</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">
                          <i class="fas fa-fw fa-area-chart"></i>
                          <span>Reporting</span></a>
                      </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- FIN MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                            </form>
                            <div class="header-button">
                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="avatar" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION["prenom"] ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="avatar" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $_SESSION["prenom"] . " " . $_SESSION["nom"] ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $_SESSION["email"] ?></span>
                                                </div>
                                            </div>
                                            
                                            <div class="account-dropdown__footer">
                                                <a href="index.php?deconnexion=ok">
                                                    <i class="zmdi zmdi-power"></i>Déconnexion</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->