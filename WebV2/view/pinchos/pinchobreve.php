
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
                  <center><th><h3>Descripcion</h3></th></center>
          <?php
              if(isset($_GET["msg"])){
                $msg = $_GET["msg"];
                echo($msg);
              }
              if(isset($_GET["array"])){
                $array = unserialize($_GET["array"]);
                foreach($array as $pincho){

                  $idPincho = $pincho["idPincho"];
                  $nombre = $pincho["nombrePIN"];
                  $descripcion = $pincho["descripcionPIN"];
                  $precio =  $pincho["precioPIN"];
                  $fotoPIN = $pincho["fotoPIN"];
                  echo "<center><table><tr><td><a href='../../controller/controlPinC.php?pincha=$idPincho.'><img src=".$fotoPIN." height=200px width=300px></a></td><td><table><tr><td><p> <h3>Nombre: </h3></p>".$nombre."</td></tr><tr><td><h3>Precio: </h3>".$precio."</td></tr></table></td></tr></center>";
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
