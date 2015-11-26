<?php

	require_once '../../functions/BDconectar.php';

	ConectarBD();

	session_start();

	$nombreP = $_SESSION["name"];

	$cont=0;

	while($cont<10){

	$numero_aleatorio = rand(1,10000);

	$a = "SELECT COUNT(*) FROM Codigo where idCodigo='$numero_aleatorio'";

	$b=mysql_query($a)or die('No funciona'.mysql_error()); 


	if (mysql_result($b, 0)<1){

	$sql = "INSERT INTO Codigo (idCodigo,Participante_TablaUsuarios_login)
			VALUES ('$numero_aleatorio','$nombreP')";

	$result = mysql_query($sql)or die('No funciona'.mysql_error());

	if($cont<1){

		echo "Codigos Generados: ";
		echo "<table><tr></tr></table>";
	}
	if($cont>0){

		echo" ,";
	}

	$cont++;
	echo "<h1><".$numero_aleatorio."</h1>";

	}
}
echo".";


?>
