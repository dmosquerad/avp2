<?php

	require_once("../../model/pincho.php");

	$nombrePOP=$_SESSION["name"];

	$c = new Pincho();
	$c->mostrarPinProbados($nombrePOP);

?>
