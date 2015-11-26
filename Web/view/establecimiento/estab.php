
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

                            <table>
                                  <thead>
                                        <th><h3>Descripcion</h3></th>
                                        <div class="col-md-3 col-sm-6">
                                         <div class="team-member">
                                          <div class="team-details">
                                        <?php include ('../../controller/controlListaEstab.php'); ?>
                                        </div>
                                      </div>
                                      </div>
                                  </thead>
                            </table>
                  <div class="row" style="padding-top: 337px;"></div>

                  </div><!-- /.row -->

              </div>
      <!-- End ESTABLECIMIENTO Section -->
    </tbody>
</html>
