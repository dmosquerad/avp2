
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
                        <h3>NOTICIAS</h3>
                        <p></p>
                    </div>
                </div>

                <div class="row">
                  <center><th><h3></h3></th></center>
          <?php
              if(isset($_GET["msg"])){
                $msg = $_GET["msg"];
                echo($msg);
              }
              if(isset($_GET["array"])){
                $array = unserialize($_GET["array"]);
                foreach($array as $pincho){

                  $titulo = $pincho["tituloPIN"];
                  $noticia = $pincho["noticiaPIN"];
                  $hora =  $pincho["date"];
                  echo "<center><p><table><tr><td><center><h3><b>".$titulo."</b></h3></center><p>".$hora."</p></td></tr><tr><td><p>".$noticia."<p></td></tr></table></p><center>";

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
