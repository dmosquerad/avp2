<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>AVP</title>

        <!-- Bootstrap Core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="css/font-awesome.min.css" rel="stylesheet">

		<!-- Custom CSS -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>


    <!-- Template js -->
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/contacto_me.js"></script>
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/script.js"></script>

    </head>

    <body>

        <!-- Start Logo Section -->
        <section id="logo-section" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo text-center">
                            <img src="images/LogoPincho.svg" ></img>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo Section -->


        <!-- Start Main Body Section -->
        <div class="mainbody-section text-center">
            <div class="container">
                <div class="row">

                    <div class="col-md-3">

                        <div class="menu-item blue">
                            <a href="view/usuarios/login.php" data-toggle="modal">
                                <i class="fa fa-sign-in"></i>
                                <p>Login</p>
                            </a>
                        </div>

                        <div class="menu-item green">
                            <a href="view/usuarios/prelogin.php" data-toggle="modal">
                                <i class="fa fa-pencil-square-o"></i>
                                <p>Registro</p>
                            </a>
                        </div>

                        <div class="menu-item light-red">
                            <a href="view/busqueda/busqueda.php" data-toggle="modal">
                                <i class="fa fa-search"></i>
                                <p>Busqueda</p>
                            </a>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <!-- Start CAROUSEL Section -->
                        <div class="home-slider">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding-bottom: 30px;">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="images/Tapa1.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/Tapa2.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/Tapa3.jpg" class="img-responsive" alt="">
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- Start Carousel Section -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="menu-item color responsive">
                                    <a href="view/pinchos/pinchobreve.php" data-toggle="modal">
                                        <i class="fa fa-cutlery"></i>
                                        <p>Pinchos</p>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="menu-item light-orange responsive-2">
                                    <a href="view/establecimiento/estab.php" data-toggle="modal">
                                        <i class="fa fa-home"></i>
                                        <p>Establecimentos</p>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="menu-item light-red">
                            <a href="view/basesconcurso/bases2.php" data-toggle="modal">
                                <i class="fa fa-file"></i>
                                <p>Reglas</p>
                            </a>
                        </div>

                        <div class="menu-item color">
                            <a href="view/usuarios/contacto.php" data-toggle="modal">
                                <i class="fa fa-envelope-o"></i>
                                <p>Contacto</p>
                            </a>
                        </div>

                        <div class="menu-item blue">
                            <a href="view/layouts/gastromapa.php" data-toggle="modal">
                                <i class="fa fa-map-marker"></i>
                                <p>Gastromapa</p>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Body Section -->

    </body>

</html>
