<?php

    $user= $_POST['user'];
    $pass= $_POST['pass'];


    $connect= new mysqli('localhost','g42','g42','g42');

    session_start();

    $ExisteLogin = "select * from tablausuarios where login = '".$user."' and contraseña='".$pass."'";

    $Resultado = mysql_query($ExisteLogin) or die('No se puede comprobar si existe ese usuario');

    if(mysql_num_rows($Resultado)==1){

          $_SESSION["name"] = $_POST['user'];
      		header('Location:../../index.php');
    }
    else
    {
    	echo 'Login o contraseña incorrectos';
    	echo "<a href='login.php'>Volver al login</a>";
    }
  ?>
