<?php
session_start();
$login=$_SESSION["name"];
$email= $_POST['email'];
$pass= $_POST['pass'];
$pass2= $_POST['pass2'];

if($pass==$pass2){
  require_once '../functions/BDconectar.php';
  ConectarBD();

  $ModificaUsuario= "Update tablausuarios set emailU='$email', password='$pass' where login='$login'";
  $Modificacion = mysql_query($ModificaUsuario) or die('error al ejecutar la modificacion de usuario');
  header('Location:../view/usuarios/administrador.php');
}

else{
  header('Location:../view/error/errorModificacion.php');
/*
  echo 'Los campos Contraseña y Repetir Contraseña no coinciden';
  echo 'Por favor, revise esos campos';
  echo "<a href='../view/usuarios/modificacionORG.php'>Volver a la Modificación</a>";*/
}

 ?>
