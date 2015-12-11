<?php
require_once '../model/pincho.php';
session_start();
$pincho= new Pincho();

$a=array();
$a['login']=$_SESSION["name"];
$a['name']=$_POST['name'];
$a['precio']=$_POST['precio'];
$a['foto']= $_POST['foto'];
$a['desc']=$_POST['desc'];
$a['ingr']=$_POST['ingredientes'];

$bool=$pincho->comprobarPinchoPar($a);
if($bool==true){
    $ex=$pincho->select($a);
        $insertPin=$pincho->insertarPincho($a);
        header('Location:../view/usuarios/participante.php');
}else{
        header('Location:../view/error/errorPincho2.php');
}
?>
