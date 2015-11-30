<?php

	require_once '../../functions/BDconectar.php';

	ConectarBD();

	$sql = "SELECT TablaUsuarios_login,descripcionPAR,horarioPAR FROM participante";
	$result = mysql_query ($sql)or die('No funciona');

	// Listamos
while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
		echo '<tr>';
		echo '<td>'.$row['TablaUsuarios_login'].'</td>';
		echo '<td>'.$row['descripcionPAR'].'</td>';
		echo '<td>'.$row['horarioPAR'].'</td>';
		echo '<td><a href="../../controller/borrarestablecimiento.php?idPincho='.$row['TablaUsuarios_login'].'">Eliminar</a></td>';
		echo '</tr>';
}
		//libreamos memoria
mysql_free_result($result);
?>
