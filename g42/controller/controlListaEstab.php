<?php
require_once("../model/part.php");

$pa = new Participante();
$boolean = $pa->selectAll();

if($boolean == false){
  $msg = "Error";
  header("Location: ../view/establecimiento/estab.php?msg=$msg");
}else{
  $array = serialize($boolean);
  header("Location: ../view/establecimiento/estab.php?array=$array");
}

?>
