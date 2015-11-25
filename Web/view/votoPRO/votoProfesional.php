<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">


        <title>AVP - Voto </title>

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
  <a href="../../view/votoPRO/preVotoPro.php"><div class="section-modal" id="service-modal" tabindex="-1">
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
                            <h3>VOTO PROFESIONAL</h3>
                            <p>Pinchos a valorar</p>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px;">
                      <div class="col-md-12">
                        <div class="row">
                          <h1 style="text-align:center"></h1>
                                <div align="center">
                              <table style="margin: auto;">
                                <thead>
                                  <tr>

                                    <th>Nombre Pincho</th>
                                    <th>Enlace foto</th>
                                    <th>Descripción</th>
                                    <th>Participante</th>
 
                                  </tr>
                                </thead>
                                <tbody>
                                <?php include('../../controller/controlPRO.php');?> 
                                </tbody>
                                </table> 

                        <div cass="row" style="padding-top: 20px;"></div>

                        <form action="../../controller/controlVotoPROelem.php" method="POST">
                            <div align="center">
                                <div class="row">
                            Pincho 1 <input type="number" size="10" name="voto" min="0" max="10" value='1'
                                                            required data-validation-required-message="Introduce puntuacion (0-10)">
                                                    <input type="submit" class="btn btn-primary" value="voto">
                                                    
                                    </div>

                            </div>
                    </form>

                        <div cass="row" style="padding-top: 403px;"></div> 

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
</body>
</html>
