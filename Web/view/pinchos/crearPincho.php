<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>AVP - Registro </title>
            <!-- Bootstrap Core CSS -->
            <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

            <!-- Font Awesome CSS -->
            <link href="../../css/font-awesome.min.css" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="../../css/animate.css" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="../../css/style.css" rel="stylesheet">

            <!-- Custom Fonts -->
            <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>


            <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->
</head>

<body>
  <?php
  require_once '../../controller/prueba.php';
  session_start();
  if(isset($_SESSION["name"])){
    $user=$_SESSION["name"];
    if(comprobar($user,'3')!=true){
      session_destroy();
      header('Location: ../../index.php');
    }
  }else{
      header('Location: ../../index.php');
  }
  ?>
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
                  <h3>Registro</h3>
              </div>
          </div>
          <div class="row" style="padding-top: 80px;">
              <div class="col-md-15">
                      <div class="row">
                          <div class="col-md-6">
                            <form method= "post" action="../../controller/procesarPincho.php">
                            <label for="name">Nombre:</label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nombre" name="name"
                                required data-validation-required-message="Introduce nombre del pincho">
                                <p class="help-block text-danger"></p>
                            </div>
                            <label for="precio">Precio:</label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Precio" name="precio"
                                required data-validation-required-message="Introduce precio del pincho">
                                <p class="help-block text-danger"></p>
                            </div>
                            <label for="foto">Foto:</label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Foto" name="foto"
                                required data-validation-required-message="Introduce foto del pincho">
                                <p class="help-block text-danger"></p>
                            </div>
                            <label for="desc">Descripcion:</label>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Descripcion del local" name="desc"
                                required data-validation-required-message="Introduce una descripcion del pincho"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <label for="ingredientes">Ingredientes:</label>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Ingredientes del Pincho" name="ingredientes"
                                required data-validation-required-message="Introduce ingredientes del pincho"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                              <button type="submit" class="btn btn-primary">SUBIR</button>
                            </div>
                            </form>
                            <div class="row" style="padding-top: 155px;">
                            </div>
                          </div>
                      </div>
              </div>
          </div>
      </div>
  </div>
</div>

</body>
</html>
