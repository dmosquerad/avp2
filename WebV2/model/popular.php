<?php
require_once("BDconectar.php");

class Popular{
    
    private $db;
    private $con;

    public function __construct() {
        $this->db = new BD();
        $this->con = $this->db->getConnect();
    }
 

    //controlVotoPOP //echo
    public function insertaVotoPopular($codigoFin){

    $sql ="UPDATE pincho A , codigo B
        SET votoPOP=votoPOP+1 
        WHERE A.Participante_TablaUsuarios_login=B.Participante_TablaUsuarios_login AND B.idCodigo='$codigoFin'";

    $result = mysql_query ($sql)or die('No funciona'.mysql_error());

    echo "<h2>Voto Realizado</h2>";
    }

    }

?>
