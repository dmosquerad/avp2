<?php
require_once("../model/user.php");

    $p = new Usuario();

    $boolean = $p->selectAllNoticias();

   if($boolean == false){
      $msg = "Error";
      header("Location: ../view/layouts/noticias.php?msg=$msg");
    }
    else{
      $bool = serialize($boolean);
      header("Location: ../view/layouts/noticias.php?array=$bool");

    }
?>
