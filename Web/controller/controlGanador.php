<?php

 //VA

	require_once '../../functions/BDconectar.php';

	ConectarBD();

    session_start();


	$nombreP = $_SESSION["name"];
	$pincho = $_POST["pincho"];
 
 	$a="SELECT COUNT(*) FROM pincho WHERE idPincho='$pincho' AND finalista='1'";

	$b = mysql_query($a)or die('No funciona'.mysql_error());

	if(mysql_result($b, 0)==1){

	$sql = "UPDATE juradoprofesional
			SET votoFinal='$pincho'
	 		WHERE TablaUsuarios_login='$nombreP'";


	$result = mysql_query($sql)or die('No funciona'.mysql_error());
	
	echo "<h2>Voto Ganador Realizado</h2>";

	}else{

		echo "</h2>Fallo numero elegido no es finalista o no existe</h2>";
	}

?>
