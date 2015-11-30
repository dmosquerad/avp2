<?php

	require_once '../../functions/BDconectar.php';

	ConectarBD();

    session_start();

	//Recogemos las variables que vienen por POST desde el formulario
	$nombreP = $_SESSION["name"];

	$sql = "SELECT idPincho, nombrePIN, fotoPIN, descripcionPIN, Participante_TablaUsuarios_login 
			FROM pincho 
			WHERE Finalista='1' AND idPincho";


	$result = mysql_query ($sql)or die('No funciona');

	// Listamos
	while ($row = mysql_fetch_row($result)){
	       echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td>';
	}

?>

