<?php
$login= $_POST['login'];
$email= $_POST['email'];
$pass= $_POST['pass'];
$pass2= $_POST['pass2'];
$prof= $_POST['job'];

if($pass==$pass2){
  require_once '../functions/BDconectar.php';
  ConectarBD();

  $ModificaUsuario= "Update tablausuarios set emailU='$email', contraseña='$pass' where login='$login'";
  $Modificacion = mysql_query($ModificaUsuario) or die('error al ejecutar la modificacion de usuario');
  $ModificaJPRO= "Update juradoprofesional set profesionPRO='$prof' where TablaUsuarios_login='$login'";
  $Modificacion = mysql_query($ModificaJPRO) or die('error al ejecutar la modificacion de jurado popular');
  header('Location:../view/usuarios/juradoProfesional.php');
}

else{

  echo 'Los campos Contraseña y Repetir Contraseña no coinciden';
  echo 'Por favor, revise esos campos';
  echo "<a href='../view/usuarios/modificacionJPRO.php'>Volver a la Modificación</a>";
}
 ?>
