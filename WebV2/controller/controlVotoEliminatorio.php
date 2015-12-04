<?php

	require_once("../../model/jpro.php");

    session_start();

	$nombreP = $_SESSION["name"];
	$pinchoelem =$_GET['pincho'];

	$c = new Profesional();
	$c->muestraEliminatorioFinal($nombreP, $pinchoelem);

?>
