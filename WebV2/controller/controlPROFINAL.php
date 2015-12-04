<?php


	require_once("../../model/jpro.php");

    session_start();

	$nombreP = $_SESSION["name"];

	$c = new Profesional();
	$c->muestraFinalista($nombreP);

?>
