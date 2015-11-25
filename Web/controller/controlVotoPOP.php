<?php

	require_once '../functions/BDconectar.php';

	ConectarBD();

	session_start();


	echo $_SESSION["name"];

	echo " no va";

	// //Recogemos las variables que vienen por POST desde el formulario
	// $codigo1 = $_POST['Codigo1'];
	// $codigo2 = $_POST['Codigo2'];
	// $codigo3 = $_POST['Codigo3'];

	// echo '$codigo1';


	// if(isset($codigo1)){

	// 		$sql ="UPDATE pincho set votoPOP=votoPOP+1 where idPincho='$codigo1'";
	// 		$result = mysql_query ($sql)or die('No funciona VOTO');

	// 		$sql1 ="UPDATE codigo set uso='1' where idCodigo IN ('$codigo1','$codigo2','$codigo3')";
	// 		$result1 = mysql_query ($sql1)or die('No funciona DESUSAR');
	// }
    
    // if(isset($codigo2)){

	// 		$sql ="UPDATE pincho set votoPOP=votoPOP+1 where idPincho='$codigo2'";
	// 		$result = mysql_query ($sql)or die('No funciona VOTO');

	// 		$sql1 ="UPDATE codigo set uso='1' where idCodigo IN ('$codigo1','$codigo2','$codigo3')";
	// 		$result1 = mysql_query ($sql1)or die('No funciona DESUSAR');
	// }

	// if(isset($codigo3)){

	// 		$sql ="UPDATE pincho set votoPOP=votoPOP+1 where idPincho='$codigo3'";
	// 		$result = mysql_query ($sql)or die('No funciona VOTO');

	// 		$sql1 ="UPDATE codigo set uso='1' where idCodigo IN ('$codigo1','$codigo2','$codigo3')";
	// 		$result1 = mysql_query ($sql1)or die('No funciona DESUSAR');
	// }
?>