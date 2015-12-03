<?php
require_once("../model/modeloParticipante.php");

$pa = new Participante();
$boolean = $pa->selectAll();

if($boolean == false){
  $msg = "Error";
  header("Location: ../view/establecimiento/estab.php?msg=$msg");
}else{
  $array = serialize($boolean);
  header("Location: ../view/establecimiento/estab.php?array=$array");
}


  $action = $_GET["action"];
  if ($action == "verEstab") {
      verEstab();
  } else {
      //Procesamiento de futuras peticiones que vengan por GET
      echo("No recibe los datos del GET");
  }
}

function verEstab() {
    $aux = new Participante();
    $boolean = $aux->selectAll($array["TablaUsuarios_login"]);

    if ($boolean == false) {
      $msg = "Error";
        header("Location: ../view/error/errorPincho1.php");
    } else {
      $array=serialize($boolean);
        header("Location: ../view/estabcompleto.php?$array");
    }
}

?>
