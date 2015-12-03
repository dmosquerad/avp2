<?php
//tengo que abrir alli la base de datos
require_once("../../model/codigo.php");

	session_start();

	$nombreP = $_SESSION["name"];
	$numero = $_GET["numero"];
// Genera Codigo valor de veces a generar.

	$c = new Codigo();
	$c->generaCodigo($nombreP, $numero);

?>