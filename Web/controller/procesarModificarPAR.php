<?php
$login= $_POST['login'];
$email= $_POST['email'];
$pass= $_POST['pass'];
$pass2= $_POST['pass2'];
$desc= $_POST['desc'];
$foto=$_POST['foto'];
$horaIni=$_POST['timeStart'];
$horaFin=$_POST['timeEnd'];
$coord=$_POST['coord'];

$hora=$horaIni.'-' .$horaFin;

if($pass==$pass2){
  require_once '../functions/BDconectar.php';
  ConectarBD();

  $ModificaUsuario= "Update tablausuarios set emailU='$email', contraseña='$pass' where login='$login'";
  $Modificacion = mysql_query($ModificaUsuario) or die('error al ejecutar la modificacion de usuario');
  $ModificaPAR= "Update participante set descripcionPAR='$desc', coordenadasPAR='$coord', fotoPAR='$foto', horarioPAR='$hora'
  where TablaUsuarios_login='$login'";
  $Modificacion = mysql_query($ModificaPAR) or die('error al ejecutar la modificacion de participante');
  header('Location:../view/usuarios/participante.php');
}

else{

  echo 'Los campos Contraseña y Repetir Contraseña no coinciden';
  echo 'Por favor, revise esos campos';
  echo "<a href='../view/usuarios/modificacionPAR.php'>Volver a la Modificación</a>";
}


 ?>
