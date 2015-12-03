<?php
require_once("BDconectar.php");
class Popular{
    private $db;
    private $con;

    public function __construct() {
        $this->db = new BD();
        $this->con = $this->db->getConnect();
    }

    public function select($login) {
        $sql = "select * from juradopopular where TablaUsuarios_login='$login'";
        $result = mysql_query($sql, $this->con);
        $jp=mysql_fetch_array($result);
        return $jp;
    }

    public function insertPop($a){
      $login=$a['login'];
      $desc=$a['desc'];
      $InsertaJuradoPopular = "Insert into juradopopular(descripcionPOP, TablaUsuarios_login) values('$desc','$login')";
    	$insercion = mysql_query($InsertaJuradoPopular) or die('error al ejecutar la insercion de jurado popular');
    }

    public function modificarPop($pop){
        $login = $pop['login'];
        $desc = $pop['desc'];

        $modificaPOP= "Update juradopopular set descripcionPOP='$desc' where TablaUsuarios_login='$login'";
        $modificacion = mysql_query($modificaPOP,$this->con);
    }


    public function select($login) {
        $sql = "select * from juradopopular where TablaUsuarios_login='$login.'";
        $result = mysql_query($sql, $this->con);
        $jp=mysql_fetch_array($result);
        return $jp;
    }
}

 ?>
