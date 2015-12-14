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
    <tbody>
      <?php
      require_once ("../../model/user.php");
      require_once ("../../model/part.php");
      $user=new Usuario();
      session_start();
      if(isset($_SESSION["name"])){
        $login=$_SESSION["name"];
        if($user->comprobarTipo('3',$login)==true){
          echo $_SESSION["name"];
          $part=new Participante();
          $datos1=$user->select($login);
          $datos2=$part->select($login);
        }
        else{
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
                            <h3>Modificacion de datos:</h3>
                            <p>Participante</p>
                        </div>
                    </div>


                    <div class="row" style="padding-top: 80px;">
                        <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                      <form method= "post" action="../../controller/procesarModificarPAR.php">
                                        <!--
                                        <label for="login">Login:</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="Login" name="login"
                                            required data-validation-required-message="Introduce tu login">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                      -->
                                        <label for="email">Email:</label>
                                        <div class="form-group">
                                            <input type="email" class="form-control" value="<?php echo $datos1["emailU"]?>"
                                            name="email" required data-validation-required-message="Introduce tu nuevo email">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <label for="pass">Clave:</label>
                                        <div class="form-group">
                                            <input type="password" class="form-control" value="<?php echo $datos1["password"]?>"
                                            name="pass" required data-validation-required-message="Introduce tu nueva clave">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <label for="pass2">Repite clave:</label>
                                        <div class="form-group">
                                            <input type="password" class="form-control" value="<?php echo $datos1["password"]?>"
                                            name="pass2" required data-validation-required-message="Confirma tu nueva clave">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <label for="foto">Foto:</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="<?php echo $datos2["fotoPAR"]?>"
                                            name="foto" required data-validation-required-message="Introduce tu foto">
                                            <p class="help-block text-danger"></p>
                                        </div>

                                        <div class="form-group">
                                            <label for="desc">Descripcion:</label>
                                            <textarea class="form-control" name="desc"
                                            required data-validation-required-message="Introduce una descripcion del local">
                                            <?php echo $datos2["descripcionPAR"]?>
                                            </textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>

                                        <label for="timeStart">Hora Inicio:</label>
                                        <div class="form-group">
                                            <input type="time" name="timeStart"
                                            required data-validation-required-message="Introduce tu nuevo horario">
                                            <p class="help-block text-danger"></p>
                                        </div>

                                       <label for="timeEnd">Hora Fin:</label>
                                       <div class="form-group">
                                            <input type="time" name="timeEnd"
                                            required data-validation-required-message="Introduce tu nuevo horario">
                                            <p class="help-block text-danger"></p>
                                        </div>

                                        <label for="coord">Coordenadas:</label>
                                        <div class="form-group">
                                             <input type="text" name="coord" value="<?php echo $datos2["longitud"]?>"
                                             required data-validation-required-message="Introduce tu nuevo horario">
                                             <input type="text" name="coord" value="<?php echo $datos2["latitud"]?>"
                                             required data-validation-required-message="Introduce tu nuevo horario">
                                             <p class="help-block text-danger"></p>
                                         </div>

                                    <div style="padding-top: 20px;">

                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 text-center">
                                        <button type="submit" class="btn btn-primary">MODIFICAR</button>
                                    </div>
                                  </form>
                                    <div class="row" style="padding-top: 200px;">
                    </div>
                        </div>
                    </div>
							   </div>
                        </div>
                    </div>
                </div>

            </div>

    </tbody>

</html>
