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

    public function insertComent($a){
      $login= $a["nombre"];
      $comentario= $a["comentario"];
      $id= $a["idPincho"];

      $sql = "Insert into comentarios(descripcionCOM, Pincho_idPincho, TablaUsuarios_login)
      values ('$comentario','$id','$login')";
      $res= mysql_query($sql)or die('error al ejecutar la insercion de usuario');
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

    public function selectComent($id){
      $consulta= "select * from comentarios where Pincho_idPincho= '$id'";
      $result= mysql_query($consulta) or die('No se puede comprobar si existe ese usuario');

      if (mysql_num_rows($result) == 0) {
          return false;
      } else {
          $toret = array();
          while ($row = mysql_fetch_assoc($result)) {
              $toret[] = $row;
          }
        return $toret;
      }
    }

    public function selectAllComent(){
      $consulta= "select * from comentarios";
      $result= mysql_query($consulta) or die('No se puede comprobar si existe ese usuario');

      if (mysql_num_rows($result) == 0) {
          return false;
      } else {
          $toret = array();
          while ($row = mysql_fetch_assoc($result)) {
              $toret[] = $row;
          }
        return $toret;
      }
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

    public function selectUsers() {
            $sql = 'select * from tablausuarios';
            $result = mysql_query($sql, $this->con);
            if (mysql_num_rows($result) == 0) {
                return false;
            } else {
                $toret = array();
                while ($row = mysql_fetch_assoc($result)) {
                    $toret[] = $row;
                }
              return $toret;
            }
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

    //misnews
    public function listarNoticias() {
            $sql = 'select * from noticias';
            $result = mysql_query($sql, $this->con);
            if (mysql_num_rows($result) == 0) {
                return false;
            } else {
                $toret = array();
                while ($row = mysql_fetch_assoc($result)) {
                    $toret[] = $row;
                }
              return $toret;
            }
    }
    //misnews
    public function nuevaNoticia($titulo, $texto, $hora) {
            $sql1 = 'select MAX(numNOT)+1 from noticias';
            $resultado = mysql_query($sql1) or die('error');
            $contados = mysql_result($resultado,0);
            
            $sql = "INSERT INTO noticias (numNOT,tituloPIN,noticiaPIN,date)
                VALUES ('$contados','$titulo','$texto','$hora')";
            $result = mysql_query($sql)or die('No funciona'.mysql_error());

    }
    //misnews al modificar modifica la fecha tambien
    public function editaNoticia($titulo, $texto, $hora, $id) {
            
            $sql = "UPDATE `noticias` SET tituloPIN='$titulo',noticiaPIN='$texto',date='$hora' WHERE numNOT='$id'";

            $result = mysql_query($sql)or die('No funciona'.mysql_error());

    }

    public function selectAllNoticias() {
        $sql = "select * from noticias ORDER BY date DESC";
        $result = mysql_query($sql, $this->con);
        if (mysql_num_rows($result) == 0) {
            return false;
        } else {
            $toret = array();
            while ($row = mysql_fetch_assoc($result)) {
                $toret[] = $row;
            }
          return $toret;
        }
    }
}

 ?>
