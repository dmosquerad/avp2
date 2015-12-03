<?php
require_once("BDconectar.php");

class Profesional{

    private $db;
    private $con;

    public function __construct() {
        $this->db = new BD();
        $this->con = $this->db->getConnect();
    }

    //ControlPROFINAL //echo
    public function muestraFinalista($nombreP){
    //Recogemos las variables que vienen por POST desde el formulario
    $sql = "SELECT idPincho, nombrePIN, fotoPIN, descripcionPIN, Participante_TablaUsuarios_login 
            FROM pincho 
            WHERE Finalista='1' AND idPincho";


    $result = mysql_query ($sql)or die('No funciona');

    // Listamos
    while ($row = mysql_fetch_row($result)){
           echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td>';
    }

    }

    //ControlGanador //echo
    public function insertaVotoProfesionalGanador($nombreP, $pincho ){

    $nombreP = $_SESSION["name"];
    $pincho = $_POST["pincho"];
 
    $a="SELECT COUNT(*) FROM pincho WHERE idPincho='$pincho' AND finalista='1'";

    $b = mysql_query($a)or die('No funciona'.mysql_error());

    if(mysql_result($b, 0)==1){

    $sql = "UPDATE juradoprofesional
            SET votoFinal='$pincho'
            WHERE TablaUsuarios_login='$nombreP'";


    $result = mysql_query($sql)or die('No funciona'.mysql_error());
    
    echo "<h2>Voto Ganador Realizado</h2>";

    }else{

        header('Location: ../../view/error/errorVotoPROfin.php');
    }
   
    }

    //controlPRO //echo
    public function muestraEliminatorioPrincipio($nombreP){

    $sql = "SELECT B.idPincho, B.nombrePIN, B.fotoPIN, B.descripcionPIN, B.Participante_TablaUsuarios_login 
    FROM pincho_has_juradoprofesional A, pincho B 
    WHERE A.JuradoProfesional_TablaUsuarios_login='$nombreP' AND  A.Pincho_idPincho=B.idPincho";


    $result = mysql_query ($sql)or die('No funciona'.mysql_error());

    // Listamos
    while ($row = mysql_fetch_row($result)){

           echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td></tr>';
    }  


    }

    //controlVotoEliminatorio //echo
    public function muestraEliminatorioFinal($nombreP,$pinchoelem){

        $nombreP = $_SESSION["name"];
        $pinchoelem =$_GET['pincho'];


        $a = "SELECT COUNT(*) FROM pincho_has_juradoprofesional where JuradoProfesional_TablaUsuarios_login='$nombreP' AND Pincho_idPincho='$pinchoelem'";

        $b=mysql_query($a)or die('No funciona'.mysql_error()); 

        if (mysql_result($b, 0)>0){

        $sql = "SELECT B.nombrePIN, B.fotoPIN, B.descripcionPIN, B.Participante_TablaUsuarios_login 
        FROM pincho_has_juradoprofesional A, pincho B 
        WHERE A.JuradoProfesional_TablaUsuarios_login='$nombreP' AND  A.Pincho_idPincho=B.idPincho AND A.Pincho_idPincho='$pinchoelem'";


        $result = mysql_query ($sql)or die('No funciona');
        

        // Listamos
        while ($row = mysql_fetch_row($result)){

               echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td></tr>';

        }
        }else{

            header('Location: ../../view/error/errorVotoPROelem.php');
        }

    }

    //ControlVotoPROelem //echo
    public function insertaVotoProfesionalEliminatorio($nombreP ,$voto , $pincho){


        //Recogemos las variables que vienen por POST desde el formulario
        $voto = $_POST['cant'];
        $pincho = $_POST['voto'];
        $nombreP = $_SESSION["name"];
        
        $a = "SELECT COUNT(*) FROM votoeliminatorio where JuradoProfesional_TablaUsuarios_login='$nombreP' AND Pincho_idPincho='$pincho'";

        $b=mysql_query($a)or die('No funciona'.mysql_error()); 

        if (mysql_result($b, 0)>0){

        $sql ="UPDATE votoeliminatorio
        SET votoJPROelim='$voto'
        WHERE JuradoProfesional_TablaUsuarios_login='$nombreP' AND Pincho_idPincho='$pincho'";
        
        $result = mysql_query ($sql)or die('No funciona'.mysql_error());
        
        echo "<h2>Voto Realizado</h2>";

        }else{

            header('Location: ../../view/error/errorVotoPROelem.php');
        }
    }

}
?>
