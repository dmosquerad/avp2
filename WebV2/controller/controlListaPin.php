<?php
require_once("../model/modeloPincho.php");

$p = new Pincho();
$boolean = $p->selectAll();

if($boolean == false){
  $msg = "Error";
  header("Location: ../view/pinchos/pinchobreve.php?msg=$msg");
}else{
  $array = serialize($boolean);
  header("Location: ../view/pinchos/pinchobreve.php?array=$array");
}

?>
