<?php

	require_once '../../functions/BDconectar.php';

	ConectarBD();

	//Recogemos las variables que vienen por POST desde el formulario
	$nombreP = $_GET['nomPIN'];

	$sql = "SELECT * FROM pincho WHERE (nombrePIN like '%".$nombreP."%')";
	$result = mysql_query ($sql)or die('No funciona');

	// Listamos
	while ($row = mysql_fetch_row($result)){
	       echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row[8].'</td><td>'.$row[9].'</td>';
	}

?>
