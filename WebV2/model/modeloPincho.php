<?php

require_once("bdconectar.php");

class Pincho {

    private $db;
    private $con;

    public function __construct() {
        $this->db = new Database();
        $this->con = $this->db->getConnection();
    }

    //Funcion que devuelve todos los pinchos validados en el sistema.
    public function selectAll() {
        $sql = 'select * from pincho where estadoPIN=1';
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
