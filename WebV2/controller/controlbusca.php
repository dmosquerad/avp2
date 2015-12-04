<?php
require_once("../model/pincho.php");

$p = new Pincho();
if(isset($_POST["pincho"]))
{
$nombreP = $_POST["pincho"];
$boolean = $p->buscar($nombreP);
    if($boolean == false){
      $msg = "Error";
      header("Location: ../view/error/errorPincho1.php?msg=$msg");
    }else{
      $array = serialize($boolean);
      header("Location: ../view/busqueda/busquedapincho.php?array=$array");
}

}
else{
$nombreE = $_POST['estab'];
$boolean1 = $p->buscarE($nombreE);

if($boolean1 == false)
{
  $msg="Error";
}else{
  $array = serialize($boolean1);
  header("Location: ../view/busqueda/busquedaestab.php?array=$array");
}
}

?>
