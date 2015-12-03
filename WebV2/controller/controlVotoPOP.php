<?php

	require_once("../../model/popular.php");
    $codigoFin=$_POST['volv'];

	$c = new popular();
	$c->insertaVotoPopular($codigoFin);

    
?>