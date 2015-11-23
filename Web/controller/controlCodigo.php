<?php

	require_once '../../functions/BDconectar.php';

	ConectarBD();

	//Recogemos las variables que vienen por POST desde el formulario
	$codigo1 = $_POST['Codigo1'];
	$codigo2 = $_POST['Codigo2'];
	$codigo3 = $_POST['Codigo3'];

	$sql = "SELECT A.idPincho, A.precioPin, A.fotoPIN, A.descripcionPIN, A.nombrePIN, A.Participante_TablaUsuarios_login FROM pincho A,juradopopular_has_codigo B  WHERE B.Codigo_idCodigo IN ('$Codigo1','$Codigo2','$Codigo3') AND B.uso=0";

	$result = mysql_query ($sql)or die('No funciona');

	// Listamos
	while ($row = mysql_fetch_row($result)){
	       echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3];
	}

	//depues de selecionar el boton 

	//SELECT MAX( "VALOR VOTO" ) + 1 FROM "Facturas"
?>