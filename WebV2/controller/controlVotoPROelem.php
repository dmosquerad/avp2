<?php


	require_once("../../model/profesional.php");

    session_start();

	$voto = $_POST['cant'];
	$pincho = $_POST['voto'];
	$nombreP = $_SESSION["name"];

	$c = new Profesional();
	$c->insertaVotoProfesionalEliminatorio($nombreP, $voto, $pincho);

?>