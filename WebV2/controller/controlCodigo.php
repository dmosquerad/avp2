<?php

	require_once("../../model/codigo.php");
    
    $codigo1 = $_GET["Codigo1"];
 	$codigo2 = $_GET["Codigo2"];
 	$codigo3 = $_GET["Codigo3"];

	$c = new Codigo();
	$c->checkeaCodigo($codigo1, $codigo2, $codigo3);

?>

