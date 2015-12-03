<?php

require_once("bdconectar.php");

class Participante {

    private $db;
    private $con;

    public function __construct() {
        $this->db = new Database();
        $this->con = $this->db->getConnection();
    }

      //Funcion que devuelve todos los pinchos validados en el sistema.
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
      //Funcion para ver un establecimiento.
      /*
      public function selectAll($participante) {
          $sql = "select * from participante where TablaUsuarios_login=$participante";
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
      */
}

?>
