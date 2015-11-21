<?php
$login= $_POST['login'];
$email= $_POST['email'];
$pass= $_POST['pass'];
$pass2= $_POST['pass2'];
$desc= $_POST['desc'];

if($pass==$pass2){
  require_once '../functions/BDconectar.php';
  ConectarBD();

  $ModificaUsuario= "Update tablausuarios set emailU='$email', password='$pass' where login='$login'";
  $Modificacion = mysql_query($ModificaUsuario) or die('error al ejecutar la modificacion de usuario');
  $ModificaJPOP= "Update juradopopular set descripcionPOP='$desc' where TablaUsuarios_login='$login'";
  $Modificacion = mysql_query($ModificaJPOP) or die('error al ejecutar la modificacion de jurado popular');
  header('Location:../view/usuarios/juradoPopular.php');
}

else{

  echo 'Los campos Contraseña y Repetir Contraseña no coinciden';
  echo 'Por favor, revise esos campos';
  echo "<a href='../view/usuarios/modificacionJPOP.php'>Volver a la Modificación</a>";
}
 ?>
