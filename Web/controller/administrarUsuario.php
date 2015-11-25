<?php

	require_once '../../functions/BDconectar.php';

	ConectarBD();

	$sql = "SELECT login,nombreU,emailU,tipo FROM tablausuarios";
	$result = mysql_query ($sql)or die('No funciona');

	// Listamos
while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
		echo '<tr>';
		echo '<td>'.$row['login'].'</td>';
		echo '<td>'.$row['nombreU'].'</td>';
		echo '<td>'.$row['emailU'].'</td>';
    echo '<td>'.$row['tipo'].'</td>';
		echo '<td><a href="../../controller/borrarusuario.php?id='.$row['login'].'">Eliminar</a></td>';
  //  echo '<td><a href="../../controller/borrarusuario.php?id='.$row['login'].'">Editar</a></td>';
		echo '</tr>';
}
		//libreamos memoria
mysql_free_result($result);
?>
