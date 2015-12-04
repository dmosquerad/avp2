<?php

require_once '../functions/BDconectar.php';
ConectarBD();

$nombre = $_GET['nombrePIN'];

$sql="UPDATE pincho SET estadoPIN='1' WHERE nombrePIN='$nombre'";

mysql_query ($sql)or die('No funciona');
header('Location: controlAdministrador.php?action=vp');

?>
