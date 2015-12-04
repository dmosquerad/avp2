<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap Core CSS -->
        <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="../../css/font-awesome.min.css" rel="stylesheet">

		      <!-- Custom CSS -->
        <link href="../../css/animate.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../../css/style.css" rel="stylesheet">

    </head>
    <tbody>
      <!-- Start pinchos completa-->
      <a href="../../controller/controlSesiones.php"><div class="section-modal" id="service-modal" tabindex="-1">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                  </div>
                  </a>
      <!--Contenido-->
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>PINCHOS</h3>
                            <p>Descripcion completa</p>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6 col-md-offset-3 text-center">
                            <div class="testimonial">
                              <?php
                              if(isset($_GET["msg"])){
                                $msg = $_GET["msg"];
                                echo($msg);
                              }
                              if(isset($_GET["array2"])){
                                $array = unserialize($_GET["array2"]);
                                foreach ($array as $pincho) {
                                  $nombre = $pincho["nombrePIN"];
                                  $descripcion = $pincho["descripcionPIN"];
                                  $precio = $pincho["precioPIN"];
                                  $foto = $pincho["fotoPIN"];
                                }
                              }
                            ?>
                            <center><img src="<?php echo $pincho["fotoPIN"]; ?>" class="img-responsive tam"></center>
                            <p><h4><?php echo $pincho["nombrePIN"]; ?></h4></p>
                            <div class="speech">
                                <p>Descripcion: <?php echo $pincho["descripcionPIN"]; ?></p>
                                <p>Coordenadas: <?php echo $pincho["precioPIN"]; ?></p>

                            </div>
                          </div>
                            </div>
                        </div>
                      </div>
                  </div>
        </div>
    </tbody>
</html>
