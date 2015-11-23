<?php

	require_once '../../functions/BDconectar.php';

	ConectarBD();

	//Recogemos las variables que vienen por POST desde el formulario
	$codigo1 = $_POST['Codigo1'];
	$codigo2 = $_POST['Codigo2'];
	$codigo3 = $_POST['Codigo3'];

	$sql1 ="UPDATE juradopopular_has_codigo set votoPOP = votoPOP +1 where Codigo_idCodigo = '$codigo1'";

	$result1 = mysql_query ($sql1)or die('No funciona');

	$sql2 ="UPDATE juradopopular_has_codigo set uso = uso +1 where Codigo_idCodigo IN('$codigo1','$codigo2','$Codigo3')";

	$result2 = mysql_query ($sql2)or die('No funciona');

?>