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
  <a href="introduceCodigo.php"><div class="section-modal" id="service-modal" tabindex="-1">
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
                            <h3>Codigos</h3>
                            <p>Pinchos probados:</p>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px;">
                      <div class="col-md-12">
                        <div class="row">
                          <h1 style="text-align:center"></h1>
                            <div class ="col-md-4 col-md-offset-4">
                							<table style="margin: auto;">
                								<thead>
                									<tr>
                                    <th>ID Pincho</th>
                  									<th>Precio Pincho</th>
                                    <th>Enlace foto</th>
                  									<th>Descripción</th>
                                    <th>Nombre Pincho</th>
                                    <th>Participante</th>   
                									</tr>
                								</thead>
                                <tbody>
                                <?php include('../../controller/controlCodigo.php');?> 
                                </tbody>
                							</table> 

                                <select name="pincho">
                                    <option>$_POST['Codigo1'];</option>
                                    <option>$_POST['Codigo2'];</option>
                                    <option>$_POST['Codigo3'];</option>
                                </select>
                                
                            <div cass="row" style="padding-top: 403px;"></div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
</body>
</html>
