<?php
require_once'../model/user.php';
session_start();

$a=array();
$a['login']=$_SESSION["name"];
$a['email']=$_POST['email'];
$a['pass']=$_POST['pass'];
$pass2= $_POST['pass2'];

if($a['pass']==$pass2){
  $user = new Usuario();
  $user->modificar($a);
  header('Location:../view/usuarios/administrador.php');
}
else{
  header('Location:../view/error/errorModificacion.php');
}


 ?>
