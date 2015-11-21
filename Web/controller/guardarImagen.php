<?php
require_once '../functions/BDconectar.php';
ConectarBD();

$image = imagecreatefromjpeg('imagen.gif');
ob_start();
imagejpeg($image);
$jpg = ob_get_contents();
ob_end_clean();
$jpg = str_replace('##','##',mysql_escape_string($jpg));
 ?>
