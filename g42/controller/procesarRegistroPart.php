<?php
  require_once'../model/user.php';
  require_once'../model/part.php';
  session_start();

  $horaIni=$_POST['timeStart'];
  $horaFin=$_POST['timeEnd'];
  $pass2=$_POST['pass2'];
  $hora=$horaIni.'-' .$horaFin;

  $a=array();
  $a['login']= $_POST['login'];
  $a['name'] = $_POST['name'];
  $a['email']= $_POST['email'];
  $a['pass'] = $_POST['pass'];
  $a['desc'] = $_POST['desc'];
  $a['foto']= $_POST['foto'];
  $a['coord'] = $_POST['coord'];
  $a['hora'] = $hora;

  if($a['pass']!=$pass2){
    header('Location:../view/error/errorRegistro.php');
  }else{
    $user = new Usuario();
    $comprobar= $user->exists($a);
    if($comprobar == false){
        header('Location:../view/error/errorRegistro2.php');
    }
    else{
      $part= new Participante();
      $user->insertPart($a);
      $part->insertarPart($a);
      $_SESSION["name"] = $a['login'];
      header('Location:../view/usuarios/participante.php');
    }
  }
  /*
  if($pass==$pass2){

  ConectarBD();

  //Comprobamos si ya existe ese login
  $consultar = "select * from tablausuarios where login = '$login' ";
  $resultado = mysql_query($consultar) or die('error al ejecutar la consulta de login');
  $a=mysql_num_rows($resultado);

  if($a>'0'){
    header('Location:../view/error/errorRegistro2.php');

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
  }
  */

 ?>
