<?php
	include('view/header.php');
?>


            <!-- MAIN -->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Dashboard</h2>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Icon Cards-->
                        <div class="row">
                            <div class="col-xl-4 col-sm-6 mb-4">
                                <div class="card text-white bg-primary o-hidden h-100">
                                <div class="card-body">
                                    <div class="card-body-icon">
                                    <i class="fa fa-user"></i>
                                    </div>
                                    <div class="mr-5">Utilisateur</div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="index.php?utilisateurs=accueil">
                                    <span class="float-left">Accéder</span>
                                    <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 mb-4">
                                <div class="card text-white bg-warning o-hidden h-100">
                                <div class="card-body">
                                    <div class="card-body-icon">
                                    <i class="fas fa-fw fa-plus"></i>
                                    </div>
                                    <div class="mr-5">Attribution</div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="index.php?attributions=accueil">
                                    <span class="float-left">Accéder</span>
                                    <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 mb-4">
                                <div class="card text-white bg-success o-hidden h-100">
                                <div class="card-body">
                                    <div class="card-body-icon">
                                    <i class="fa fa-desktop"></i>
                                    </div>
                                    <div class="mr-5">Ordinateur</div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="index.php?ordinateurs=accueil">
                                    <span class="float-left">Accéder</span>
                                    <span class="float-right">
                                    <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                                </div>
                            </div>
                        
                        </div>
                        
                        
<?php
	include('view/footer.php');
?>