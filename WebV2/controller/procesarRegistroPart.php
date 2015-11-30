<?php
  $login= $_POST['login'];
  $name= $_POST['name'];
  $email= $_POST['email'];
  $pass= $_POST['pass'];
  $pass2= $_POST['pass2'];
  $tipo='3';
  $desc= $_POST['desc'];
  $foto=$_POST['foto'];
  $horaIni=$_POST['timeStart'];
  $horaFin=$_POST['timeEnd'];
  $coord=$_POST['coord'];

  $hora=$horaIni.'-' .$horaFin;

  if($pass==$pass2){
  require_once '../functions/BDconectar.php';
  ConectarBD();

  //Comprobamos si ya existe ese login
  $consultar = "select * from tablausuarios where login = '$login' ";
  $resultado = mysql_query($consultar) or die('error al ejecutar la consulta de login');
  $a=mysql_num_rows($resultado);

  if($a>'0'){
    header('Location:../view/error/errorRegistro2.php');
    /*
    echo 'Este usuario ya existe';
    echo "<a href='../view/usuarios/registroParticipante.php'>Volver al  Registro</a>";*/
  }
    else{
      $InsertaUsuario = "Insert into tablausuarios(login,nombreU,emailU,password,tipo)
      values ('$login','$name','$email','$pass','$tipo')";
      $insercion = mysql_query($InsertaUsuario) or die('error al ejecutar la insercion de usuario');
      $InsertaParticipante = "Insert into participante(descripcionPAR,coordenadasPAR,fotoPAR,horarioPAR,TablaUsuarios_login)
      values('$desc','$coord','$foto','$hora','$login')";
    	$insercion = mysql_query($InsertaParticipante) or die('error al ejecutar la insercion de jurado popular');
      header('Location:../view/usuarios/participante.php');
    }
  }else{
    header('Location:../view/error/errorRegistro.php');
    /*
    echo "Los campos Contraseña y Repetir Contraseña no coinciden";
    echo "Por favor, revise esos campos";
    echo "<a href='../view/usuarios/registroParticipante.php'>Volver al  Registro</a>";
    */
  }

 ?>
