<?php
require_once'../model/user.php';
session_start();
$user=new Usuario();
$a=array();

$a["nombre"]=$_SESSION["name"];
$a["comentario"]=$_POST['comentario'];
$a["idPincho"]=$_GET['id'];

//echo $a["nombre"].",". $a["comentario"]. "," . $a["idPincho"];

$user->insertComent($a);
header('Location:../view/pinchos/pinchocompleta.php');

 ?>
