<?php

//---------------------------------------------------------------------------------
//Funcion: ConectarBD()
//Fecha: 20/11/2015
//Establece conexion con el gestor de bd, si no es posible informa y devuelve 0.
//A continuacion selecciona la bd, si no es posible informa y devuelve 0.
//---------------------------------------------------------------------------------

function ConectarBD()
{

	if (!(mysql_connect('localhost','g42','g42')))
	{
		echo 'No es posible conectar al gestor de bd';
		return 0;
	}
	if (!(mysql_select_db('g42')))
	{
		echo 'No es posible seleccionar la bd';
		return 0;
	}

}
?>
