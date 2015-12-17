<?php
require_once'../model/user.php';
require_once'../model/pincho.php';
session_start();
$user=new Usuario();
$pin=new Pincho();
$a=array();

$a["nombre"]=$_SESSION["name"];
$a["comentario"]=$_POST['comentario'];
$a["idPincho"]=$_GET["id"];
$i=$a["idPincho"];

$bool = $pin->buscarPin($i);
$p=serialize($bool);
$user->insertComent($a);
header("Location:../view/pinchos/pinchocompleta.php?array2=$p");
?>
