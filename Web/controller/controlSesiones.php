<?php

require_once '../functions/BDconectar.php';
ConectarBD();
session_start();
if($_SESSION["name"]!=NULL){
  $user=$_SESSION["name"];

  $tipo= "select tipo from tablausuarios where login='$user'";
  $p = mysql_query($tipo) or die('No se puede comprobar si existe ese usuario');
  $a=mysql_fetch_array($p);

  switch($a["tipo"]){
      case '1':
          header('Location:../view/usuarios/administrador.php');
      break;
      case '2':
          header('Location:../view/usuarios/juradoProfesional.php');
      break;
      case '3':
          header('Location:../view/usuarios/participante.php');
      break;
      case '4':
          header('Location: ../view/usuarios/juradoPopular.php');
          break;
  }
}else{
   header('Location: ../index.php');
}

?>
