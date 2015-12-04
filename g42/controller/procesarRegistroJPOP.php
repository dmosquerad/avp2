<?php
  require_once'../model/user.php';
  require_once'../model/jpop.php';
  session_start();

  $a=array();
  $a['login']= $_POST['login'];
  $a['name'] = $_POST['name'];
  $a['email']= $_POST['email'];
  $a['pass'] = $_POST['pass'];
  $a['desc'] = $_POST['desc'];
  $pass2=$_POST['pass2'];

  if($a['pass']!=$pass2){
    header('Location:../view/error/errorRegistro.php');
  }else{
    $user = new Usuario();
    $comprobar= $user->exists($a);
    if($comprobar == false){
        header('Location:../view/error/errorRegistro2.php');
    }
    else{
      $pop= new Popular();
      $user->insertPop($a);
      $pop->insertPop($a);
      $_SESSION["name"] = $a['login'];
      header('Location:../view/usuarios/juradoPopular.php');
    }
  }

  /*
  if($pass==$pass2){
    require_once '../functions/BDconectar.php';
    ConectarBD();

    //Comprobamos si ya existe ese login
    $consultar = "select * from tablausuarios where login = '$login' ";
    $resultado = mysql_query($consultar) or die('error al ejecutar la consulta de login');
    $a=mysql_num_rows($resultado);

    if($a>'0'){
      header('Location:../view/error/errorRegistro2.php');

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
    header('Location:../view/error/errorRegistro.php');

  }*/
 ?>
