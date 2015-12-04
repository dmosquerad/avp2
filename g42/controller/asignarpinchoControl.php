<?php

if (!(mysql_connect('localhost', 'g42', 'g42')))
{
  echo 'Contraseña o usuario de la bd incorrectos';
  return 0;
}
if (!(mysql_select_db('g42')))
{
  echo 'No es posible seleccionar la bd';
  return 0;
}

$jpro=$_POST['JP'];
$pin=$_POST['PIN'];


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

$sql="INSERT INTO pincho_has_juradoprofesional(Pincho_idPincho, Pincho_Participante_TablaUsuarios_login,JuradoProfesional_TablaUsuarios_login)
VALUES ('$idpincho','$participante','$jpro2')";

$ejecutar = mysql_query ($sql) or die(mysql_error());



header('Location: controlAdministrador.php?action=ap');


 ?>
