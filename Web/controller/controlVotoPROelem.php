<?php

	require_once '../../functions/BDconectar.php';

	ConectarBD();

	//Recogemos las variables que vienen por POST desde el formulario
	$Voto = $_POST['Voto'];
	$Jurado = $_POST['Jurado'];


	$sql ="UPDATE votoeliminatorio set votoJPROelim='$Voto' where JuradoProfesional_TablaUsuarios_login='$Jurado'";

	$result = mysql_query ($sql)or die('No funciona');

?>