<?php

	require_once '../../functions/BDconectar.php';

	ConectarBD();

    session_start();

	//Recogemos las variables que vienen por POST desde el formulario
	$nombreP = $_SESSION["name"];


	$sql = "SELECT B.idPincho, B.nombrePIN, B.fotoPIN, B.descripcionPIN, B.Participante_TablaUsuarios_login 
	FROM pincho_has_juradoprofesional A, pincho B 
	WHERE A.JuradoProfesional_TablaUsuarios_login='$nombreP' AND  A.Pincho_idPincho=B.idPincho";


	$result = mysql_query ($sql)or die('No funciona'.mysql_error());

	// Listamos
	while ($row = mysql_fetch_row($result)){

	       echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td></tr>';
	}   
?>