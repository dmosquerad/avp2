<?php

	require_once '../../functions/BDconectar.php';

	ConectarBD();

	session_start();
    echo $_SESSION["name"];
    


	//Recogemos las variables que vienen por POST desde el formulario
	$codigo1 = $_POST["Codigo1"];
	$codigo2 = $_POST["Codigo2"];
	$codigo3 = $_POST["Codigo3"];

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

	$result = mysql_query ($sql)or die('No funciona' . mysql_error());

/*
	$sql2= "UPDATE juradopopular_has_codigo set JuradoPopular_TablaUsuarios_login='$_SESSION' where Codigo_idCodigo IN('$codigo1','$codigo2','$codigo2')";

	$result2 = mysql_query($sql2)or die('No funciona' . mysql_error());

	$sql3= "UPDATE codigo set uso='1' where Codigo_idCodigo IN('$codigo1','$codigo2','$codigo2')";

	$result2 = mysql_query($sql2)or die('No funciona' . mysql_error());
*/
	// Listamos
	while ($row = mysql_fetch_row($result)){

	       echo '<tr><td>'.$cont.'</td><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row[6];
	       $cont += 1;

	}
}

?>