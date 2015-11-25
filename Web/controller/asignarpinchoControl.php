<?php
require_once '../functions/BDconectar.php';
ConectarBD();

$jpro=$_POST['JP'];
$pin=$_POST['PIN'];

//$sqlpin="SELECT idPincho,Participante_TablaUsuarios_login,Codigo_idCodigo FROM pincho WHERE nombrePIN='$pin'";
//$sqlpincho="SELECT * FROM pincho WHERE nombrePIN = '$pin'";
$sqlpincho="SELECT * FROM pincho WHERE idPincho = '$pin'";
$sentencia=mysql_query($sqlpincho) or die('No funciona result');

$pe=mysql_num_rows($sentencia);

if(mysql_num_rows($sentencia)==1){

while ($row = mysql_fetch_array($sentencia, MYSQL_BOTH)) {
    $idpincho=$row[0];
    $participante=$row[6];
    $codigo=$row[7];
}

}else {
  echo 'ERROR Numero de filas: '.$pe;
}
$jpro2=trim($jpro);

$sql="INSERT INTO pincho_has_juradoprofesional(Pincho_idPincho, Pincho_Participante_TablaUsuarios_login, Pincho_Codigo_idCodigo, JuradoProfesional_TablaUsuarios_login)
VALUES ('$idpincho','$participante','$codigo','$jpro2')";

$ejecutar = mysql_query ($sql) or die(mysql_error());



header('Location: ../../view/administrar/asignarpincho.php');


 ?>
