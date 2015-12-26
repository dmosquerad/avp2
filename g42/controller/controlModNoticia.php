<?php

	require_once("../model/user.php");

    session_start();
    date_default_timezone_set('Europe/Madrid');

	$hora=date("d.m.Y H:i A");
	
	$id=$_POST['numNOT'];
  	$titulo=$_POST['titulo'];
  	$texto=$_POST['texto'];
	$nombreP = $_SESSION["name"];

	$dato = new Usuario();
	$dato-> editaNoticia($titulo, $texto, $hora, $id);

	header('Location: controlAdministrador.php?action=lo');

?>