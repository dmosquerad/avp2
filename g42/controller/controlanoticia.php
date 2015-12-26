<?php

	require_once("../model/user.php");

    session_start();
    date_default_timezone_set('Europe/Madrid');

	$hora=date("d.m.Y H:i A");

  	$titulo=$_POST['titulo'];
  	$texto=$_POST['texto'];
	$nombreP = $_SESSION["name"];

	$dato = new Usuario();
	$dato-> nuevaNoticia($titulo, $texto, $hora);

	header('Location: controlAdministrador.php?action=lo');

?>













