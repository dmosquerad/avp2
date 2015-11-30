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

$id = $_GET['id'];

$sql = "DELETE FROM tablausuarios WHERE login='$id'";
mysql_query ($sql)or die('No funciona');
header('Location: ../../view/administrar/listarusuarios.php');
?>
