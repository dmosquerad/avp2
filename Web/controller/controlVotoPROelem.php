<?php



	require_once '../functions/BDconectar.php';

	ConectarBD();

	session_start();

	//Recogemos las variables que vienen por POST desde el formulario
	$Voto = $_POST['voto'];
	$Pincho = $_POST['pincho'];
	$nombreP = $_SESSION["name"];

	$sql ="UPDATE votoeliminatorio set votoJPROelim='$Voto' where JuradoProfesional_TablaUsuarios_login='$nombreP' AND Pincho_idPincho='$Pincho'";

	$result = mysql_query ($sql)or die('No funciona'.mysql_error());

?>