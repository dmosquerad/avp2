<?php
require_once("BDconectar.php");
class Organizador{
    private $db;
    private $con;

    public function __construct() {
        $this->db = new BD();
        $this->con = $this->db->getConnect();
    }
}
 ?>
