<?php

require_once("BDconectar.php");
class Pincho {

    private $db;
    private $con;

    public function __construct() {
        $this->db = new BD();
        $this->con = $this->db->getConnect();
    }

    //Funcion que devuelve todos los pinchos validados en el sistema.

    public function mostrarPinProbados($n){

      $sql="select distinct b.nombrePIN, a.Participante_TablaUsuarios_login from codigo a, pincho b where a.usadoPor='$n' and a.Participante_TablaUsuarios_login=b.Participante_TablaUsuarios_login";
      $result=mysql_query($sql) or die('Error mostrar pinchos probados');

        // Listamos
      while ($row = mysql_fetch_row($result)){
             echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td>';
      }

    }

    public function select($a){
      $name=$a['name'];
      $consultar = "select * from pincho where nombrePIN = '$name' ";
      $resultado = mysql_query($consultar) or die('error al mirar si existe ese pincho');
      $pin=mysql_num_rows($resultado);
      return $pin;

    }

    public function comprobarPinchoPar($a){
      $login=$a['login'];
      $consultar = "select * from pincho where Participante_TablaUsuarios_login = '$login' ";
      $resultado = mysql_query($consultar) or die('error al ejecutar al buscar un pincho ');
      $pin=mysql_num_rows($resultado);
      if($pin>'0'){
        return false;
      }
      else{
        return true;
      }
    }

    public function insertarPincho($a) {
      $precio=$a['precio'];
      $foto=$a['foto'];
      $desc=$a['desc'];
      $name=$a['name'];
      $ingr=$a['desc'];
      $login=$a['login'];

      $InsertaPincho= "Insert into pincho(precioPIN,fotoPIN,descripcionPIN,nombrePIN,
      ingredientesPIN,Participante_TablaUsuarios_login,votoPOP,finalista,estadoPIN)
      values ('$precio','$foto','$desc','$name','$ingr','$login','0','0','0')";
      $insercion = mysql_query($InsertaPincho) or die('error al ejecutar la insercion del pincho');

    }
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

    public function borrarPin($pin){
       $idPincho= $pin["idPincho"];
       $tipo="DELETE FROM pincho WHERE idPincho='$idPincho'";
       $p = mysql_query($tipo) or die('error al borrar pincho');
       $a=mysql_fetch_array($p);
       return $a;
    }

    public function validarPin($pin){
       $nombrePIN= $pin["nombrePIN"];
       $tipo="UPDATE pincho SET estadoPIN='1' WHERE nombrePIN='$nombrePIN'";
       $p = mysql_query($tipo) or die('error al validar pincho');
       $a=mysql_fetch_array($p);
       return $a;
    }
    public function selectAllSinV() {
        $sql = 'select * from pincho';
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
    ////Muestra un pincho
    public function buscar($nombreP) {

      $sql = "SELECT * FROM pincho WHERE (nombrePIN like '%".$nombreP."%')";
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
    //Busca un pincho para la descricion completa
    public function buscarPin($id) {

      $sql = "SELECT * FROM pincho WHERE idPincho = '$id'";
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
    ///buscar establecimiento
    public function buscarE($nombreE) {

      $sql = "SELECT * FROM participante WHERE (TablaUsuarios_login like '%".$nombreE."%')";
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
