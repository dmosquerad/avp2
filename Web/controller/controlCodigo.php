<?php

	require_once '../../functions/BDconectar.php';

	ConectarBD();
    
	$codigo1 = $_GET["Codigo1"];
	$codigo2 = $_GET["Codigo2"];
	$codigo3 = $_GET["Codigo3"];


	$cont = 1;


	$a= "SELECT COUNT(idPincho) 
	FROM pincho A,codigo B 
	WHERE B.idCodigo IN('$codigo1','$codigo2','$codigo3') AND B.Participante_TablaUsuarios_login=A.Participante_TablaUsuarios_login AND B.uso IS NULL";

	$result1 = mysql_query($a) or die('No funciona' .mysql_error());
	$contados = mysql_result($result1,0);

	if($contados < 3){

		echo "INTRODUCE TRES CODIGOS VALIDOS";

	}else{

	$sql = "SELECT A.idPincho, A.precioPin, A.fotoPIN, A.descripcionPIN, A.nombrePIN, A.Participante_TablaUsuarios_login, B.idCodigo 
	FROM pincho A,codigo B 
	WHERE B.idCodigo IN('$codigo1','$codigo2','$codigo3') AND B.Participante_TablaUsuarios_login=A.Participante_TablaUsuarios_login AND B.uso IS NULL";
	$result = mysql_query($sql)or die('No funciona' . mysql_error());

	$sql3= "UPDATE codigo set uso='1' where idCodigo IN('$codigo1','$codigo2','$codigo3')";

	$result2 = mysql_query($sql3)or die('No funciona' . mysql_error());

	while ($row = mysql_fetch_row($result)){

	       echo '<tr><td>'.$cont.'</td><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row[6];
	       $cont += 1;

	}
}

?>