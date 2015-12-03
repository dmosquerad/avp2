<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

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
<tbody>
  <a href="../../view/usuarios/participante.php"><div class="section-modal" id="service-modal" tabindex="-1">
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
                            <h3>Codigo</h3>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px;">
                            <div class="col-md-12">
                                    <div class="row">
                                          <h1 style="text-align:center"></h1>
                                          <div class ="col-md-4 col-md-offset-4">
                                          <div class="col-lg-12 text-center">
                                            <div id="success"></div>
                                            <form action="generaCodigo2.php" method="GET">

                                              Numero de codigos a generar: <input type="number" name="numero" min="7" max="100" >

                                              <div class="row" style="padding-top: 20px;">

                                              <button type="submit" class="btn btn-primary">Generar codigos</button>
                          
                                            </form>
                                          </div> 
                                            <div class="row" style="padding-top: 1003px;">
                                            </div>
                                          </div>
                                  </div>
                             </div>
                    </div>
                  </div>
  </div>
</tbody>
</html>
