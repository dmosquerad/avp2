<?php

	require_once '../../functions/BDconectar.php';

	ConectarBD();

	//Recogemos las variables que vienen por POST desde el formulario
	$Pincho = $_POST['Pincho'];
	$jurado = $_POST['Jurado'];
//ponerlo elvoto final en voto elimenatorio

	$sql ="UPDATE juradoprofesional set votoFinal='$pincho' where TablaUsuarios_login='$jurado' ;

	$result = mysql_query ($sql)or die('No funciona');

?>