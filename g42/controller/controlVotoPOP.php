<?php

	require_once("../../model/jpop.php");
    $codigoFin=$_POST['volv'];

	$c = new Popular();
	$c->insertaVotoPopular($codigoFin);


?>
