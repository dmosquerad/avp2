<?php

	require_once("../../model/profesional.php");

    session_start();

	$nombreP = $_SESSION["name"];

	$c = new Profesional();
	$c->muestraEliminatorioPrincipio($nombreP);

?>