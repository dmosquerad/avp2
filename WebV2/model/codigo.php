<?php
require_once("BDconectar.php");

class Codigo{
    
    private $db;
    private $con;

    public function __construct() {
        $this->db = new BD();
        $this->con = $this->db->getConnect();
    }

    //controlGenCodigo //echo
    public function generaCodigo($nombreP , $numero){

/*        $nombreP = $_SESSION["name"];
        $numero = $_GET["numero"];*/
        
        // Genera Codigo valor de veces a generar.

        $cont=0;

        $contador = 1;

        while($cont<$numero){

        $numero_aleatorio = rand(1,10000);

        $a = "SELECT COUNT(*) FROM codigo where idCodigo='$numero_aleatorio'";

        $b=mysql_query($a)or die('No funciona'.mysql_error()); 


        if (mysql_result($b, 0)<1){

        $sql = "INSERT INTO codigo (idCodigo,Participante_TablaUsuarios_login)
                VALUES ('$numero_aleatorio','$nombreP')";

        $result = mysql_query($sql)or die('No funciona'.mysql_error());

        if($cont<1){

            echo "Codigos Generados: ";
            echo "<table>";

        } 
        if ($contador == 1){
        echo "<tr>"; 
        }
        if ($contador > 7) { 
            echo "</tr>"; 
            $contador = 1; 
        } 

        echo "<td><h1>".$numero_aleatorio."</h1></td>";
            $contador++;
            $cont++;

        }
        }
    echo"</table>";

    }

    //controlCodigo //echo es de popular
    public function checkeaCodigo($codigo1, $codigo2, $codigo3){    
    
    $codigo1 = $_GET["Codigo1"];
    $codigo2 = $_GET["Codigo2"];
    $codigo3 = $_GET["Codigo3"];

    $c1;
    $c2;
    $c3;
    
    $cont = 1;


    $a= "SELECT COUNT(idPincho) 
    FROM pincho A,codigo B 
    WHERE B.idCodigo IN('$codigo1','$codigo2','$codigo3') AND B.Participante_TablaUsuarios_login=A.Participante_TablaUsuarios_login AND B.uso IS NULL";

    $result1 = mysql_query($a) or die('No funciona' .mysql_error());
    $contados = mysql_result($result1,0);

    if($contados < 3){

        header('Location: ../../view/error/errorVotoPOP1.php');

    }else{
        $a1= "SELECT B.Participante_TablaUsuarios_login
            FROM pincho A,codigo B 
            WHERE B.idCodigo='$codigo1' AND B.Participante_TablaUsuarios_login=A.Participante_TablaUsuarios_login";

        $b1=mysql_query($a1)or die('No funciona'.mysql_error()); 

        $a2= "SELECT B.Participante_TablaUsuarios_login
            FROM pincho A,codigo B 
            WHERE B.idCodigo='$codigo2' AND B.Participante_TablaUsuarios_login=A.Participante_TablaUsuarios_login";

        $b2=mysql_query($a2)or die('No funciona'.mysql_error()); 

        $a3= "SELECT B.Participante_TablaUsuarios_login
        FROM pincho A,codigo B 
        WHERE B.idCodigo='$codigo3' AND B.Participante_TablaUsuarios_login=A.Participante_TablaUsuarios_login";

        $b3=mysql_query($a3)or die('No funciona'.mysql_error()); 

        $c1=implode(mysql_fetch_row($b1));

        $c2=implode(mysql_fetch_row($b2));

        $c3=implode(mysql_fetch_row($b3));


        
        if(strcmp($c1,$c2)!=0 && strcmp($c1,$c3)!=0 && strcmp($c2,$c3)!=0){

            $sql = "SELECT A.idPincho, A.precioPin, A.fotoPIN, A.descripcionPIN, A.nombrePIN, A.Participante_TablaUsuarios_login, B.idCodigo 
                FROM pincho A,codigo B 
                WHERE B.idCodigo IN('$codigo1','$codigo2','$codigo3') AND B.Participante_TablaUsuarios_login=A.Participante_TablaUsuarios_login AND B.uso IS NULL";
            $result = mysql_query($sql)or die('No funciona' . mysql_error());

            $sql3= "UPDATE codigo set uso='1' where idCodigo IN('$codigo1','$codigo2','$codigo3')";

            $result2 = mysql_query($sql3)or die('No funciona' . mysql_error());

        while ($row = mysql_fetch_row($result)){

           echo '<tr><td>'.$cont.'</td><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row[6];
           $cont += 1;

    }}else{

    header('Location: ../../view/error/errorVotoPOP2.php');
}
}

}
}
?>
