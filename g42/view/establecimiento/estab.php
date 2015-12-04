
<!DOCTYPE html>
<html lang="en">

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

      <!-- Start ESTABLECIMIENTOS Section -->
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
              <div class="container">
                  <div class="row">
                      <div class="section-title text-center">
                          <h3>ESTABLECIMIENTOS</h3>
                          <p>Selecciona los establecimientos de Ourense</p>
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
                                        $participante = $pincho['TablaUsuarios_login'];
                                        $foto = $pincho["fotoPAR"];
                                        $horas = $pincho["horarioPAR"];
                                        $coordenadas = $pincho["coordenadasPAR"];

                                        echo "<center><table><tr><td> <a href='../../controller/controlEstabC.php?estab=$participante'><img src=".$foto." height=200px width=300px></a></td><td><table><tr><td><h3> Horario </h3>".$horas."</td></tr><tr><td><h3>Coordenadas: </h3>".$coordenadas."</td></tr></table></td></tr></center>";

                                    }
                                  }
                                ?>

                        </div>
                      </div>
                    </div>

                  </div><!-- /.row -->
      <!-- End ESTABLECIMIENTO Section -->
    </tbody>
</html>
