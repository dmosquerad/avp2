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
    <a href="../../index.php"><div class="section-modal" id="service-modal" tabindex="-1">
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
                  <center><table>
                        <thead>
                            <!--<a href="pinchoscompleta1.php"><img src="../../images/pburger.jpg" class="img-responsive tam"></a>-->
                            <!--<img src="../../images/pburger.jpg" class="img-responsive tam">
                            <li><i class="fa fa-user"></i> Auther : iThemesLab </li> <li><i class="fa fa-calendar">
                            </i> 07 Aug, 2014 </li>
                            <li><i class="fa fa-tag"></i> Music </li>
                          -->
                              <th><h3>Descripcion</h3></th>
                              <?php include ('../../controller/controlListaPincho.php'); ?>
                        </thead>
                  </table><center>
                </div>
            </div>
          </div>
        </div>
		<!-- End Latest News Section -->
	</tbody>
</html>
