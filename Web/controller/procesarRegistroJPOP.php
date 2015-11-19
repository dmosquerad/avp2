<?php
  $login= $_POST['login'];
  $name= $_POST['name'];
  $email= $_POST['email'];
  $pass= $_POST['pass'];
  $pass2= $_POST['pass2'];
  $tipo='4';
  $desc= $_POST['desc'];
  if($pass==$pass2){
    mysql_connect('localhost','g42','g42') or die('error de conexion a la BD');
    mysql_select_db('g42') or die('error de selección de la BD');
    //Comprobamos si ya existe ese login
    $consultar = "select * from tablausuarios where login = '$name' ";
    $resultado = mysql_query($consultaSilogin) or die('error al ejecutar la consulta de login');

    if(mysql_num_rows($resultado)>0){
      echo "Este usuario ya existe";
      echo '<a href=\'Registro.php\'>Volver al registro</a><BR>';
    }
    else{
      $InsertaUsuario = "Insert into tablausuarios(login,nombreU,emailU,contraseña,tipo) values ('$login','$name','$email','$pass','$tipo')";
      $insercion = mysql_query($InsertaUsuario) or die('error al ejecutar la insercion de usuario');
      $InsertaJuradoPopular = "Insert into juradopopular(descripcionPOP, TablaUsuarios_login) values('$desc','$login')"
    	$insercion = mysql_query($InsertaJuradoPopular) or die('error al ejecutar la insercion de jurado popular');
    }
  }else{
    echo "Los campos Contraseña y Repetir Contraseña no coinciden";
    echo "Por favor, revise esos campos";
    echo '<a href=\'Registro.php\'>Volver al registro</a><BR>';
  }
 ?>
