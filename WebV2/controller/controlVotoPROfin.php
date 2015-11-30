<?php

	require_once '../../functions/BDconectar.php';

	ConectarBD();

	session_start();

	//Recogemos las variables que vienen por POST desde el formulario
	$pincho = $_POST['pincho'];
	$jurado = $_SESSION["name"];
//ponerlo elvoto final en voto elimenatorio

	$sql ="UPDATE juradoprofesional set votoFinal='$pincho' where TablaUsuarios_login='$jurado'";

	$result = mysql_query ($sql)or die('No funciona');

?>