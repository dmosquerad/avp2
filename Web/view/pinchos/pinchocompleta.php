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
    <?php
  		include '../../controller/consultarPincho.php';

  		$pincho=$_GET["pincho"];

  		$array=consultarPincho($pincho);
  	?>
    <tbody>
      <!-- Start pinchos completa-->
      <a href="pinchobreve.php"><div class="section-modal" id="service-modal" tabindex="-1">
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
                                <center><img src="<?php echo $array["fotoPIN"]; ?>" class="img-responsive tam"></center>
                                <h4><?php echo $array["nombrePIN"]; ?></h4>
                                <div class="speech">
                                    <p><?php echo $array["descripcionPIN"]; ?></p>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-6 "algin="left">
                    <label for="name">Comentarios:</label>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Comentario" id="desc" required data-validation-required-message="Introduce Comentario">
                        <p class="help-block text-danger"></p>
                        </div>
                  <button type="submit" class="btn btn-primary">Introduce comentario</button>
                </div>
            <div class="row" style="padding-top: 100px;"></div>
        </div>
    </tbody>

</html>
