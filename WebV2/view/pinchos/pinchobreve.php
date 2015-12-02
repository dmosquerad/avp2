
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

        <!-- Custom CSS Fondo de inicio-->
        <link href="../../css/style.css" rel="stylesheet">

  </head>
	<tbody>
    <!-- Start Pinchos -->
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
                        <h3>SELECCION DE PINCHOS</h3>
                        <p>Descripcion breve de los pinchos</p>
                    </div>
                </div>

                <div class="row">
<?php
  if(isset($_GET["msg"])){
    $msg = $_GET["msg"];
    echo($msg);
  }
  if(isset($_GET["array"])){
    $array = unserialize($_GET["array"]);
    foreach($array as $pincho){
      echo "PINCHO";
      $idPincho = $pincho["idPincho"];
      $nombre = $pincho["nombrePIN"];
      $descripcion = $pincho["descripcionPIN"];
      $precio =  $pincho["precioPIN"];
      $fotoPIN = $pincho["fotoPIN"];
    //  echo "<a href='../controllers/galleryController.php?idPincho=$idPincho&nombre=$nombre&descripcion=$descripcion&precio=$precio&fotoPIN=$fotoPIN'>";
    //  echo "<img class='img-portfolio img-responsive' src='".$url."' width='300' height='300'>";
    }
  }
?>
                </div>
            </div>
          </div>
        </div>
		<!-- End Latest News Section -->
	</tbody>
</html>
