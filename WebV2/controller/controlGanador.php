<?php

	require_once("../../model/profesional.php");

    session_start();

	$nombreP = $_SESSION["name"];
	$pincho = $_POST["pincho"];

	$c = new Profesional();
	$c->insertaVotoProfesionalGanador($nombreP, $pincho);

?>
