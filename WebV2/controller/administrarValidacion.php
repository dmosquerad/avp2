<?php

	require_once '../../functions/BDconectar.php';

	ConectarBD();

	$sql = "SELECT nombrePIN,Participante_TablaUsuarios_login,ingredientesPIN,estadoPIN FROM pincho";
	$result = mysql_query ($sql)or die('No funciona');

	// Listamos
while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
		echo '<tr>';
		echo '<td>'.$row['nombrePIN'].'</td>';
		echo '<td>'.$row['Participante_TablaUsuarios_login'].'</td>';
		echo '<td>'.$row['ingredientesPIN'].'</td>';
    echo '<td>'.$row['estadoPIN'].'</td>';
		echo '<td><a href="../../controller/validarpincho.php?nombrePIN='.$row['nombrePIN'].'">Validar</a></td>';
		echo '</tr>';
}
		//libreamos memoria
mysql_free_result($result);
?>
