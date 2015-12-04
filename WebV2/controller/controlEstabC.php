<?php
require_once("../model/part.php");

    $p = new Participante();

    if(!isset($_GET["estab"]))
    {
        $msg="Error";
        header("Location: ../view/establecimiento/estabcompleto.php?msg=$msg");
    }
    else{
      $nombreE = $_GET["estab"];
      $bool = $p->buscarEstab($nombreE);
      if($bool== false){
          $msg="Error";
        header("Location: ../view/error/errorPincho1.php?msg=$msg");
      }
      else{
      $estab = serialize($bool);
      header("Location: ../view/establecimiento/estabcompleto.php?array2=$estab");
      }
    }
?>
