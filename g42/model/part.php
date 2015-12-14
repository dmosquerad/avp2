<?php
require_once("BDconectar.php");
class Participante{
    private $db;
    private $con;

    public function __construct() {
        $this->db = new BD();
        $this->con = $this->db->getConnect();
    }

    public function select($login) {
        $sql = "select * from participante where TablaUsuarios_login='$login'";
        $result = mysql_query($sql, $this->con);
        $part=mysql_fetch_array($result);
        return $part;
    }

    public function insertarPart($a) {
        $login = $a['login'];
        $desc=$a['desc'];
        $coordla=$a['coordla'];
        $coordlon=$a['coordlon'];
        $foto=$a['foto'];
        $hora=$a['hora'];

        $sql = "Insert into participante(descripcionPAR,latitud,longitud,fotoPAR,horarioPAR,TablaUsuarios_login)
        values ('$desc','$coordla','$coordlon','$foto','$hora','$login')";
        $result = mysql_query($sql, $this->con);
        if ($result == true) {
            return true;
        } else {
            return false;
        }
    }

    public function modificarPart($part){
        $login = $part['login'];
        $desc=$part['desc'];
        $coordla=$part['coordla'];
        $coordlon=$part['coordlon'];
        $foto=$part['foto'];
        $hora=$part['hora'];

        $modificaPAR= "Update participante set descripcionPAR='$desc', latitud='$coordla', longitud='$coordlon', fotoPAR='$foto', horarioPAR='$hora'
        where TablaUsuarios_login='$login'";
        $modificacion = mysql_query($modificaPAR,$this->con);
        }

    public function exists($part){
      $login=$part['login'];
      $sql="select * from participante where login='$login'";
      $result=mysql_query($sql, $this->con);
      if (mysql_num_rows($result) == 0) {
            return true;
        } else {
            return false;
        }
   }
   public function selectAll() {
          $sql = "select * from participante";
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
    public function borrarPar($par){
           $id= $par["idPincho"];
           $tipo="DELETE FROM participante WHERE TablaUsuarios_login='$id'";
           $p = mysql_query($tipo) or die('No se puede comprobar si existe ese usuario');
           $a=mysql_fetch_array($p);
           return $a;
  }
  //muestra el establecimiento para la vista completa
  public function buscarEstab($login) {

    $sql = "SELECT * FROM participante WHERE TablaUsuarios_login = '$login'";
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
