<?php

	require_once '../../functions/BDconectar.php';

	ConectarBD();

	//Recogemos las variables que vienen por POST desde el formulario
	$estabP = $_POST['estab'];

	$sql = "SELECT * FROM participante WHERE (TablaUsuarios_Login like '%".$estabP."%')";
	$result = mysql_query ($sql)or die('No funciona');

	// Listamos
	while ($row = mysql_fetch_row($result)){
	       echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4];
	}

?>
