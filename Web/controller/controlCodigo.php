<?php

	require_once '../../functions/BDconectar.php';

	ConectarBD();
    
	$codigo1 = $_GET["Codigo1"];
	$codigo2 = $_GET["Codigo2"];
	$codigo3 = $_GET["Codigo3"];

	$c1;
	$c2;
	$c3;
	
	$cont = 1;


	$a= "SELECT COUNT(idPincho) 
	FROM pincho A,codigo B 
	WHERE B.idCodigo IN('$codigo1','$codigo2','$codigo3') AND B.Participante_TablaUsuarios_login=A.Participante_TablaUsuarios_login AND B.uso IS NULL";

	$result1 = mysql_query($a) or die('No funciona' .mysql_error());
	$contados = mysql_result($result1,0);

	if($contados < 3){

		echo "<h2>INTRODUCE TRES CODIGOS VALIDOS</h2>";

	}else{
		$a1= "SELECT B.Participante_TablaUsuarios_login
			FROM pincho A,codigo B 
			WHERE B.idCodigo='$codigo1' AND B.Participante_TablaUsuarios_login=A.Participante_TablaUsuarios_login";

		$b1=mysql_query($a1)or die('No funciona'.mysql_error()); 

		$a2= "SELECT B.Participante_TablaUsuarios_login
			FROM pincho A,codigo B 
			WHERE B.idCodigo='$codigo2' AND B.Participante_TablaUsuarios_login=A.Participante_TablaUsuarios_login";

		$b2=mysql_query($a2)or die('No funciona'.mysql_error()); 

		$a3= "SELECT B.Participante_TablaUsuarios_login
		FROM pincho A,codigo B 
		WHERE B.idCodigo='$codigo3' AND B.Participante_TablaUsuarios_login=A.Participante_TablaUsuarios_login";

		$b3=mysql_query($a3)or die('No funciona'.mysql_error()); 

		$c1=implode(mysql_fetch_row($b1));

		$c2=implode(mysql_fetch_row($b2));

		$c3=implode(mysql_fetch_row($b3));


		
		if(strcmp($c1,$c2)!=0 && strcmp($c1,$c3)!=0 && strcmp($c2,$c3)!=0){

			$sql = "SELECT A.idPincho, A.precioPin, A.fotoPIN, A.descripcionPIN, A.nombrePIN, A.Participante_TablaUsuarios_login, B.idCodigo 
				FROM pincho A,codigo B 
				WHERE B.idCodigo IN('$codigo1','$codigo2','$codigo3') AND B.Participante_TablaUsuarios_login=A.Participante_TablaUsuarios_login AND B.uso IS NULL";
			$result = mysql_query($sql)or die('No funciona' . mysql_error());

			$sql3= "UPDATE codigo set uso='1' where idCodigo IN('$codigo1','$codigo2','$codigo3')";

			$result2 = mysql_query($sql3)or die('No funciona' . mysql_error());

		while ($row = mysql_fetch_row($result)){

	       echo '<tr><td>'.$cont.'</td><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row[6];
	       $cont += 1;

	}}else{

	echo "<h2> INTRODUCE CODIGOS DE DIFERENTES ESTABLECIMIENTOS</h2>";
}
}
?>

<!-- $a1= "SELECT B.Participante_TablaUsuarios_login
	FROM pincho A,codigo B 
	WHERE B.idCodigo='$codigo1' AND B.Participante_TablaUsuarios_login=A.Participante_TablaUsuarios_login;

$b1=mysql_query($a1)or die('No funciona'.mysql_error()); 

$a2= "SELECT B.Participante_TablaUsuarios_login
	FROM pincho A,codigo B 
	WHERE B.idCodigo='$codigo2' AND B.Participante_TablaUsuarios_login=A.Participante_TablaUsuarios_login;

$b2=mysql_query($a2)or die('No funciona'.mysql_error()); 

$a3= "SELECT B.Participante_TablaUsuarios_login
	FROM pincho A,codigo B 
	WHERE B.idCodigo='$codigo3' AND B.Participante_TablaUsuarios_login=A.Participante_TablaUsuarios_login;

$b3=mysql_query($a3)or die('No funciona'.mysql_error()); 

if(msql_result($b1, 0)!=msql_result($b2, 0) && msql_result($b1, 0)!=msql_result($b3, 0)&& msql_result($b2, 0)!=msql_result($b3, 0)) -->