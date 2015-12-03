<?php
require_once("BDconectar.php");
class Profesional{
    private $db;
    private $con;

    public function __construct() {
        $this->db = new BD();
        $this->con = $this->db->getConnect();
    }

    public function select($login) {
        $sql = "select * from juradoprofesional where TablaUsuarios_login='$login'";
        $result = mysql_query($sql, $this->con);
        $jp=mysql_fetch_array($result);
        return $jp;
    }

    public function insertarJuradoPro($jpro) {
        $login=$jpro["name"];
        $prof= $jpro["job"];

        $sql = "insert into juradoprofesional(profesionPRO,TablaUsuarios_login,votoFinal)
        values ('$prof','$login','NULL')";
        $result = mysql_query($sql, $this->con);
        if ($result == true) {
            return true;
        } else {
            echo("\n");
            return false;
        }
    }

    public function modificarPro($pro){
        $login=$pro['login'];
        $prof= $pro['prof'];
        $modificaPRO= "Update juradoprofesional set profesionPRO='$prof' where TablaUsuarios_login='$login'";
        $modificacion = mysql_query($modificaPRO, $this->con);
    }

}
 ?>
