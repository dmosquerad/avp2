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
        $cooord=$a['coord'];
        $foto=$a['foto'];
        $hora=$a['hora'];

        $sql = "Insert into participante(descripcionPAR,coordenadasPAR,fotoPAR,horarioPAR,TablaUsuarios_login)
        values ('$desc','$coord','$foto','$hora','$login')";
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
        $cooord=$part['coord'];
        $foto=$part['foto'];
        $hora=$part['hora'];

        $modificaPAR= "Update participante set descripcionPAR='$desc', coordenadasPAR='$coord', fotoPAR='$foto', horarioPAR='$hora'
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
 }


 ?>
