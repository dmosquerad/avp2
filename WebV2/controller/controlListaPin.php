<?php
require_once("../model/pincho.php");

    $p = new Pincho();

    $boolean = $p->selectAll();

    if($boolean == false){
      $msg = "Error";
      header("Location: ../view/pinchos/pinchobreve.php?msg=$msg");
    }
    else{
      $bool = serialize($boolean);
      header("Location: ../view/pinchos/pinchobreve.php?array=$bool");

    }
?>
