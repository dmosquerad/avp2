<?php
require_once'../model/user.php';
require_once'../model/part.php';
session_start();

$pass2= $_POST['pass2'];
$horaIni=$_POST['timeStart'];
$horaFin=$_POST['timeEnd'];
$hora=$horaIni.'-'.$horaFin;

$a=array();
$a['login']= $_SESSION["name"];
$a['email']= $_POST['email'];
$a['pass'] = $_POST['pass'];
$a['desc'] = $_POST['desc'];
$a['foto'] = $_POST['foto'];
$a['coord'] = $_POST['coord'];
$a['hora'] = $hora;

if($a['pass']==$pass2){
  $user= new Usuario();
  $part= new Participante();
  $user->modificar($a);
  $part->modificarPart($a);
  header('Location:../view/usuarios/participante.php');
}

else{
    header('Location:../view/error/errorModificacion.php');
}

 ?>
