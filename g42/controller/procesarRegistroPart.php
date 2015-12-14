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
  $a['coordla'] = $_POST['coordla'];
  $a['coordlon'] = $_POST['coordlon'];
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

 ?>
