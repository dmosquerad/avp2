<?php

	require_once '../../functions/BDconectar.php';

	ConectarBD();

	$sql = "SELECT idPincho,nombrePIN,Participante_TablaUsuarios_login FROM pincho";
	$result = mysql_query ($sql)or die('No funciona');

	// Listamos
while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
		echo '<tr>';
		echo '<td>'.$row['idPincho'].'</td>';
		echo '<td>'.$row['nombrePIN'].'</td>';
		echo '<td>'.$row['Participante_TablaUsuarios_login'].'</td>';
		echo '<td><a href="../../controller/borrarpincho.php?idPincho='.$row['idPincho'].'">Eliminar</a></td>';
		echo '</tr>';
}
		//libreamos memoria
mysql_free_result($result);
?>
