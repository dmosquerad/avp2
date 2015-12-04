<?php
require_once("../model/pincho.php");

    $p = new Pincho();


    if(!isset($_GET["pincha"]))
    {
        $msg="Error";
        header("Location: ../view/pinchos/pinchocompleta.php?msg=$msg");
    }
    else{
      $nombreP = $_GET["pincha"];
      $bool = $p->buscarPin($nombreP);
      if($bool== false){
          $msg="Error";
        header("Location: ../view/error/errorPincho1.php?msg=$msg");
      }
      else{
      $pin = serialize($bool);
      header("Location: ../view/pinchos/pinchocompleta.php?array2=$pin");
      }
    }
  ?>
