<?php

	require_once '../../functions/BDconectar.php';

	ConectarBD();

	$codigoFin=$_POST['volv'];

	$sql ="UPDATE pincho A , codigo B
		SET votoPOP=votoPOP+1 
		WHERE A.Participante_TablaUsuarios_login=B.Participante_TablaUsuarios_login AND B.idCodigo='$codigoFin'";

 	$result = mysql_query ($sql)or die('No funciona'.mysql_error());

 	echo "<h2>Voto Realizado</h2>";
    
?>