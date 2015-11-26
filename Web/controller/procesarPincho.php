<?php
session_start();
$login=$_SESSION["name"];
$name= $_POST['name'];
$precio= $_POST['precio'];
$foto= $_POST['foto'];
$desc= $_POST['desc'];
$ingr= $_POST['ingredientes'];

  require_once '../functions/BDconectar.php';
  ConectarBD();

  $consultar = "select * from pincho where Participante_TablaUsuarios_login = '$login' ";
  $resultado = mysql_query($consultar) or die('error al ejecutar al buscar un pincho ');
  $a=mysql_num_rows($resultado);
  if($a>'0'){
    header('Location:../view/error/errorPincho1.php');
    /*
    echo 'Ya has subido un pincho :)';
    echo "<a href='../view/usuarios/crearPincho.php'>Volver al  Registro</a>";
    */
  }
  else{
    //Comprobamos si ya existe ese pincho
    $consultar = "select * from pincho where nombrePIN = '$name' ";
    $resultado = mysql_query($consultar) or die('error al mirar si existe ese pincho');
    $a=mysql_num_rows($resultado);

    if($a>'0'){
      header('Location:../view/error/errorPincho2.php');
      /*
      echo 'Este pincho ya existe';
      echo "<a href='../view/usuarios/crearPincho.php'>Volver al  Registro</a>";*/
    }
    else{
      $consultar = "select idCodigo from codigo where Participante_TablaUsuarios_login = '$login' ";
      $resultado = mysql_query($consultar) or die('error al mirar si existe ese codigo');
      $a=mysql_fetch_array($resultado);
      $codigo=$a["idCodigo"];
      $InsertaPincho = "Insert into pincho(precioPIN,fotoPIN,descripcionPIN,nombrePIN,
      ingredientesPIN,Participante_TablaUsuarios_login,Codigo_idCodigo,votoFinal,estadoPIN)
      values ('$precio','$foto','$desc','$name','$ingr','$login','$codigo','0','0')";
      $insercion = mysql_query($InsertaPincho) or die('error al ejecutar la insercion del pincho');
      header('Location:../view/usuarios/participante.php');
    }
  }
?>
