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

$idComment = $_GET['idComment'];

$sql = "DELETE FROM comentarios WHERE id_comentario='$idComment'";
mysql_query ($sql) or die('No funciona puta');
header('Location: controlAdministrador.php?action=lc');
 ?>
