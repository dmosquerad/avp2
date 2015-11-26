<?php
  require_once '../../functions/BDconectar.php';
  ConectarBD();

  function comprobar($user,$pos){
      $tipo= "select tipo from tablausuarios where login='$user'";
      $p = mysql_query($tipo) or die('No se puede comprobar si existe ese usuario');
      $a=mysql_fetch_array($p);
      if($a["tipo"]==$pos){
          return true;
          header('Location: ../controller/controlSesiones.php');
      }
      else{
        return false;
      }
  }


 ?>
