<!DOCTYPE html>
<?php
require_once ("../../model/user.php");
$user=new Usuario();
session_start();
if(isset($_SESSION["name"])){
  $login=$_SESSION["name"];
  if($user->comprobarTipo('4',$login)==true){
    echo $_SESSION["name"];
  }
  else{
    session_destroy();
    header('Location: ../../index.php');
  }
}else{
      header('Location: ../../index.php');
}
?>
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
<body>
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
                            <h3>Introduce 3 Codigos para realizar voto</h3>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px;">
                            <div class="col-md-12">
                                    <div class="row">
                                          <h1 style="text-align:center"></h1>
                                          <div class ="col-md-4 col-md-offset-4">
                                            <form action="introduceCodigo2.php" method="get">
                                              <label for="name">Introduce 3 Codigos:</label>
                                                <div class="form-group">
                                                  <input type="text" name="Codigo1" class="form-control" placeholder="Codigo1" id="Codigo1" required data-validation-required-message="Introduce codigo1">
                                                  <p class="help-block text-danger"></p>
                                                  <input type="text" name="Codigo2" class="form-control" placeholder="Codigo2" id="Codigo2" required data-validation-required-message="Introduce codigo2">
                                                  <p class="help-block text-danger"></p>
                                                  <input type="text" name="Codigo3" class="form-control" placeholder="Codigo3" id="Codigo3" required data-validation-required-message="Introduce codigo3">
                                                  <p class="help-block text-danger"></p>
                                                </div>
                                          <div class="col-lg-12 text-center">
                                            <div id="success"></div>
                                            <button type="submit" class="btn btn-primary">Introducir 3 codigos validos</button>
                                          </div>

                                          </form>

                                            <div class="row" style="padding-top:140px;">
                                              <h3>Pinchos probados anteriormente</h3>
                                            </br>
                                              <table style="margin: auto;">
                                                <thead>
                                                  <tr>
                                                    <th>Pincho</th>
                                                    <th>Participante</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                <?php include('../../controller/controlPinPro.php');?>
                                                </tbody>
                                            </table>
                                            </div>
                                          </div>
                                  </div>
                             </div>
                    </div>
                  </div>
  </div>
</body>
</html>
