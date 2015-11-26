<?php


	require_once '../../functions/BDconectar.php';

	ConectarBD();

	session_start();

	//Recogemos las variables que vienen por POST desde el formulario
	$voto = $_POST['cant'];
	$pincho = $_POST['voto'];
	$nombreP = $_SESSION["name"];
	
	$a = "SELECT COUNT(*) FROM votoeliminatorio where JuradoProfesional_TablaUsuarios_login='$nombreP' AND Pincho_idPincho='$pincho'";

	$b=mysql_query($a)or die('No funciona'.mysql_error()); 

	if (mysql_result($b, 0)>0){

	$sql ="UPDATE votoeliminatorio
	SET votoJPROelim='$voto'
	WHERE JuradoProfesional_TablaUsuarios_login='$nombreP' AND Pincho_idPincho='$pincho'";
	
	$result = mysql_query ($sql)or die('No funciona'.mysql_error());
	
	echo "<h2>Voto Realizado</h2>";

	}else{

		echo "<h2> Id mal selecionada </h2>";
	}


?>