  <?php

echo "Estoy en el modelo";
  class Pincho {

    private $db;
    private $conectar;

	    public function __construct() {
      $this->db = new Database();
      //$this->conectar = $this->db->getConnection();

    }

  //Funcion que devuelve todos los pinchos validados.
  public function listarPinchos() {
      $db = new Database();

      $sql = $db->consulta("select * from pincho where estadoPIN=1");
/*
      if (mysql_num_rows($res) == 0) {
          return false;
      } else {
      */
          $toret = array();
          while ($row = mysqli_fetch_assoc($res)) {
              $toret[] = $row;
          }
      //}
      $db->desconectar();
      return $toret;
  }

}//Pincho
	//////1 Funcion para añadir un nuevo pincho.
  /*
  public function insertar($pincho) {
      $idPin = $pincho["idPincho"];
      $precio = $pincho["precioPIN"];
      $foto = $pincho["fotoPIN"];//url de las fotos
      $descripcion = $pincho["descripcionPIN"];
      $nombre = $pincho["nombrePIN"];
      $ingredientes = $pincho["ingredientesPIN"];
      $partablausu = $pincho["Participante_TablaUsuarios_login"];
      $votoPOP = $pincho["votoPOP"];
      $finalista = $pincho["finalista"];
      $estadoPIN = $pincho["estadoPIN"];

      $sql = "insert into Pincho (idPincho,precioPIN,fotoPIN,descripcionPIN,nombrePIN,ingredientesPIN,Participante_TablaUsuarios_login,votoPOP,finalista,estadoPIN)
      values ($idPin, $precio ,$foto, $descripcion,$nombre,$ingredientes,$partablausu,$votoPOP,$finalista,$estadoPIN)";

      $result = mysql_query($sql, $this->conectar);
      if ($result == true) {
          return true;
      } else {
          echo(mysql_error());
          return false;
      }
  }
*/
/*
    function consultarPincho()
    {
      //Realizamos la consulta
      $sql = mysql_query("SELECT fotoPIN,nombrePIN,precioPIN FROM pincho WHERE estadoPIN='1'")
      or die('No se puede hacer la consulta'. mysql_error());

      //Conectarmos con la bd
      $consulta = mysql_query($sql, $this->conectar);

      if (mysql_num_rows($consulta) == 0) {
          return false;
      } else {
        //creamos un array asociativo y guardamos la información
          while ($row = mysql_fetch_assoc($consulta)) {
              return $row;
          }
      }
  }
  */
  /*
  //Funcion que devuelve el pincho a partir de su ID
  public function elegir($id) {
      $sql = "select * from pincho where idPincho= '$id'";
      $result = mysql_query($sql, $this->conectar);
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

  //Funcion booleana que comprueba si el pincho esta activado. Si está activado
  //envia true sino false.
  public function estadopin($pincho) {

          $sql = "select estadoPIN from pincho where estadoPin='1'";
          return $result = mysql_query($sql, $this->conectar);

      }
  }

}*/
  ?>
