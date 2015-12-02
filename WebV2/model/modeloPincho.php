<?php

require_once("bdconectar.php");

class Pincho {

    private $db;
    private $conectar;

	  public function __construct() {
        $this->db = new Database();
        $this->conectar = $this->db->getConnection();
    }
  //Funcion que devuelve todos los pinchos validados.
    public function listarPinchos() {
      $sql = "select * from pincho where estadoPIN=1";
            $result = mysql_query($sql, $this->con);
            echo $result;
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
