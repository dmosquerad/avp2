<?php
    require_once ("../model/user.php");
    $user=new Usuario();
    $a['login']=$_POST['user'];
    $a['pass']=$_POST['pass'];

    session_start();
    $comprobar=$user->login($a);
    if($comprobar==true){
        $_SESSION["name"] = $a["login"];
        $tipo=$user->selectTipo($a);
        switch ($tipo["tipo"]) {
          case '1':
              header('Location:../view/usuarios/administrador.php');
          break;
          case '2':
              header('Location:../view/usuarios/juradoProfesional.php');
          break;
          case '3':
              header('Location:../view/usuarios/participante.php');
          break;
          case '4':
              header('Location: ../view/usuarios/juradoPopular.php');
         break;
        }
    }
    else{
        header('Location:../view/error/errorLogin.php');
    }

/*
    $ExisteLogin = "SELECT * from tablausuarios where login = '$user' and password='$pass'";
    $Resultado = mysql_query($ExisteLogin) or die('No se puede comprobar si existe ese usuario');

    if(mysql_num_rows($Resultado)==1){
      $tipo="select tipo from tablausuarios where login ='$user'";
      $p = mysql_query($tipo) or die('No se puede comprobar si existe ese usuario');
      $a=mysql_fetch_array($p);

      $_SESSION['name'] = $user;
      switch($a["tipo"]){
          case '1':
              header('Location:../view/usuarios/administrador.php');
          break;
          case '2':
              header('Location:../view/usuarios/juradoProfesional.php');
          break;
          case '3':
              header('Location:../view/usuarios/participante.php');
          break;
          case '4':
              header('Location: ../view/usuarios/juradoPopular.php');
         break;
      }
    }
  else {
    //$errors['a']='Login o contraseña incorrectos';
    //$_SESSION["error"]='Login o contraseña incorrectos';
    header('Location:../view/error/errorLogin.php');
    //echo "<a href='../view/usuarios/login.php'>Volver al login</a>";
  }*/

  ?>
