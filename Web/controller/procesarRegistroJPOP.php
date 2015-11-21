<?php
  $login= $_POST['login'];
  $name= $_POST['name'];
  $email= $_POST['email'];
  $pass= $_POST['pass'];
  $pass2= $_POST['pass2'];
  $tipo='4';
  $desc= $_POST['desc'];
  if($pass==$pass2){
    require_once '../functions/BDconectar.php';
    ConectarBD();

    //Comprobamos si ya existe ese login
    $consultar = "select * from tablausuarios where login = '$login' ";
    $resultado = mysql_query($consultar) or die('error al ejecutar la consulta de login');
    $a=mysql_num_rows($resultado);

    if($a>'0'){
      echo 'Este usuario ya existe';
      echo "<a href='../view/usuarios/registroJurado.php'>Volver al  Registro</a>";
    }
    else{

      $InsertaUsuario = "Insert into tablausuarios(login,nombreU,emailU,password,tipo)
      values ('$login','$name','$email','$pass','$tipo')";
      $insercion = mysql_query($InsertaUsuario) or die('error al ejecutar la insercion de usuario');
      $InsertaJuradoPopular = "Insert into juradopopular(descripcionPOP, TablaUsuarios_login) values('$desc','$login')";
    	$insercion = mysql_query($InsertaJuradoPopular) or die('error al ejecutar la insercion de jurado popular');
      header('Location:../view/usuarios/juradoPopular.php');
    }

  }
  else{

    echo 'Los campos Contraseña y Repetir Contraseña no coinciden';
    echo 'Por favor, revise esos campos';
    echo "<a href='../view/usuarios/registroJurado.php'>Volver al Registro</a>";
  }
 ?>
