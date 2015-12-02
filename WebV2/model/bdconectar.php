<?php
class Database {

    protected $conectar;

    public function __construct() {
        $aux = mysql_connect("localhost", "g42", "g42");
        if (!$aux) {
            die('No se puede conectar a la base de datos:' . mysql_error());
        }
        mysql_select_db("g42", $aux);
        mysql_set_charset('utf8');
        $this->conectar = $aux;
    }
    public function getConnection() {
      return $this->conectar;
  }
}
?>
