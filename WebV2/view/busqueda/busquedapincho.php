
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">


        <title>AVP - Busqueda </title>

        <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome CSS -->
        <link href="../../css/font-awesome.min.css" rel="stylesheet">

		<!-- Custom CSS -->
        <link href="../../css/animate.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../../css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    </head>
<body>
  <a href="busqueda.php"><div class="section-modal" id="service-modal" tabindex="-1">
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
                            <h3>Busqueda</h3>
                            <p>Resultado:</p>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px; center">
                      <div class="col-md-12">
                        <div class="row">
                          <h1 style="text-align:center"></h1>
                            <div class ="col-md-4 col-md-offset-4 contenedor">
                							<table>
                								<thead>
                									<tr>
                                    <th>ID Pincho</th>
                                    <th>Nombre Pincho</th>
                  									<th>Precio Pincho</th>
                                    <th>Estado Pincho</th>
                                    <th>Participante</th>
                									</tr>
                								</thead>
                                <tbody>
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
                                      $precio =  $pincho["precioPIN"];
                                      $estadoP =  $pincho["estadoPIN"];
                                      $usuario = $pincho["Participante_TablaUsuarios_login"];
                                      echo "<tr><td>".$idPincho."</td><td>".$nombre."</td><td>".$precio.'</td><td>'.$estadoP .'</td><td>'.$usuario.'</td></tr>';
                                    }
                                  }
                                  ?>
                                </tbody>
                							</table>
                            <div class="row" style="padding-top: 403px;"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
</body>
</html>
