<!DOCTYPE html>
<?php
$codigo1=$_GET['Codigo1'];
$codigo2=$_GET['Codigo2'];
$codigo3=$_GET['Codigo3'];
?>
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
                                <div align="center">
                							<table style="margin: auto;">
                								<thead>
                									<tr>
                                                        <th>Codigo</th>
                                    <th>ID Pincho</th>
                  									<th>Precio Pincho</th>
                                    <th>Enlace foto</th>
                  									<th>Descripción</th>
                                    <th>Nombre Pincho</th>
                                    <th>Participante</th>
                                                    <th>Codigo</th>    
                									</tr>
                								</thead>
                                <tbody>
                                <?php include('../../controller/controlCodigo.php');?> 
                                </tbody>
                				</table> 
                                <div cass="row" style="padding-top: 20px;"></div>

                                <?php echo 'Si no aparecen tres pinchos no se realizara el voto'?>

                            <div cass="row" style="padding-top: 20px;"></div>

                    <form action="haceVotoPOP.php" method="POST">
                        <select name="volv">

                            <option name ="Codigo1V" value=" <?php echo $codigo1 ?> " selected="selected" >Codigo 1</option> 
                            <option name ="Codigo2V" value="<?php echo $codigo2 ?>">Codigo 2</option>
                            <option name ="Codigo3V" value="<?php echo $codigo3 ?>">Codigo 3</option> 
                            <input type="submit" class="btn btn-primary" name="enviar" value="VOTA">
                        </select>

                    </form>
                                
                        <div cass="row" style="padding-top: 403px;"></div>    
                    </form>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
</body>
</html>
