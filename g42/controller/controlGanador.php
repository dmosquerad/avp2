<?php

	require_once("../../model/jpro.php");

    session_start();

	$nombreP = $_SESSION["name"];
	$pincho = $_POST["pincho"];

	$c = new Profesional();
	$c->insertaVotoProfesionalGanador($nombreP, $pincho);

?>
