<?php

require_once'../model/user.php';
session_start();
if($_SESSION["name"]!=NULL){
  $a= array();
  $a["login"]=$_SESSION["name"];
  $user = new Usuario();
  $tipo= $user->selectTipo($a);
  
  switch($tipo["tipo"]){
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
