<?php
require_once("BDconectar.php");
class Usuario{
    private $db;
    private $con;

    public function __construct() {
        $this->db = new BD();
        $this->con = $this->db->getConnect();
    }

    public function insertPop($user){
      $login= $user['login'];
      $name= $user['name'];
      $email= $user['email'];
      $pass= $user['pass'];
      $tipo='4';

      $InsertaUsuario = "Insert into tablausuarios(login,nombreU,emailU,password,tipo)
      values ('$login','$name','$email','$pass','$tipo')";
      $insercion = mysql_query($InsertaUsuario) or die('error al ejecutar la insercion de usuario');
    }

    public function insertPart($user){
      $login= $user['login'];
      $name= $user['name'];
      $email= $user['email'];
      $pass= $user['pass'];
      $tipo='3';

      $InsertaUsuario = "Insert into tablausuarios(login,nombreU,emailU,password,tipo)
      values ('$login','$name','$email','$pass','$tipo')";
      $insercion = mysql_query($InsertaUsuario) or die('error al ejecutar la insercion de usuario');
    }

    public function insertPro($user){
      $login= $user['login'];
      $name= $user['name'];
      $email= $user['email'];
      $pass= $user['pass'];
      $tipo='2';

      $InsertaUsuario = "Insert into tablausuarios(login,nombreU,emailU,password,tipo)
      values ('$login','$name','$email','$pass','$tipo')";
      $insercion = mysql_query($InsertaUsuario) or die('error al ejecutar la insercion de usuario');
    }

    public function modificar($user){
      $login= $user['login'];
      $email= $user['email'];
      $pass= $user['pass'];

      $ModificaUsuario= "Update tablausuarios set emailU='$email', password='$pass' where login='$login'";
      $Modificacion = mysql_query($ModificaUsuario,$this->con); //or die('error al ejecutar la modificacion de usuario');
    }

    public function selectTipo($user){
       $login= $user["login"];

       $tipo="select tipo from tablausuarios where login ='$login'";
       $p = mysql_query($tipo) or die('No se puede comprobar si existe ese usuario');
       $a=mysql_fetch_array($p);
       return $a;
    }

    public function comprobarTipo($pos,$login){
       $tipo= "select tipo from tablausuarios where login='$login'";
       $p = mysql_query($tipo,$this->con);
       $a=mysql_fetch_array($p);
       if($a["tipo"]==$pos){
            return true;
            //header('Location: ../controller/controlSesiones.php');
       }
       else{
          return false;
       }
    }


    public function login($a) {
      $login= $a['login'];
      $pass= $a['pass'];
      $sql = "select * from tablausuarios where login='$login' and password='$pass'";
      $result = mysql_query($sql, $this->con);
      if (mysql_num_rows($result) == 0) {
          echo (mysql_error());
          return false;
      } else {
          return true;
      }
    }

    public function select($login){
      $sql = "select * from tablausuarios where login='$login'";
      $p = mysql_query($sql, $this->con);
      $a=mysql_fetch_array($p);
      return $a;
    }

    public function exists($a){
        $login = $a["login"];
        $sql = "select * from tablausuarios where login='$login'";
        $result = mysql_query($sql, $this->con);
        if (mysql_num_rows($result) == 0) {
            return true;
        } else {
            return false;
        }
    }
}

 ?>
