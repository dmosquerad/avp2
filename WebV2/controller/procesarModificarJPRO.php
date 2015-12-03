<?php
require_once'../model/user.php';
require_once'../model/jpro.php';
session_start();

$a=array();
$a['login']=$_SESSION["name"];
$a['email']=$_POST['email'];
$a['pass']=$_POST['pass'];
$a['prof']=$_POST['job'];
$pass2= $_POST['pass2'];


if($a['pass']==$pass2){
  $user = new Usuario();
  $pro= new Profesional();
  $user->modificar($a);
  $pro->modificarPro($a);
  header('Location:../view/usuarios/juradoProfesional.php');
}

else{
  header('Location:../view/error/errorModificacion.php');
}
 ?>
