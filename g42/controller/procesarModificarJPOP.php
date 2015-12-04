<?php
require_once'../model/user.php';
require_once'../model/jpop.php';
session_start();

$a=array();
$a['login']=$_SESSION["name"];
$a['email']=$_POST['email'];
$a['pass']=$_POST['pass'];
$a['desc']=$_POST['desc'];
$pass2= $_POST['pass2'];

if($a['pass']==$pass2){
  $user = new Usuario();
  $pop= new Popular();
  $user->modificar($a);
  $pop->modificarPop($a);
  header('Location:../view/usuarios/juradoPopular.php');
}

else{
    header('Location:../view/error/errorModificacion.php');
/*echo 'Los campos Contraseña y Repetir Contraseña no coinciden';
  echo 'Por favor, revise esos campos';
  echo "<a href='../view/usuarios/modificacionJPOP.php'>Volver a la Modificación</a>";*/
}
 ?>
