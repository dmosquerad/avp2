  <?php
  /**
  *
  * Inserta un pincho en la base de datos
  * @access public
  *
  */
  	require_once '../../functions/BDconectar.php';
  class Pincho()
  {
	  private $idPincho;/* El id del Pincho */
	  private $nombrePIN;/* El nombre del Pincho */
	  private $precioPIN;/* El precio del Pincho */
	  private $ingredientesPIN;/* los ingredientes del Pincho */

	  private $votoFinal;/* El numero de veces que un picho ha sido votado */
	  private $fotoPin;//guarda el directorio donde se almacenará la imagen
	  private $estadoPin;/* El estado del Pincho */
	  
	    public function __construct($idPi=NULL, $nombrePIN=NULL,
		$precioPi=NULL,	$ingredientesPi=NULL, $fotoPi=NULL,
		$estadoPi=NULL, $votoFinal=NULL) {
			
			$this->idPincho = $idPincho;
			$this->nombrePin = $nombrePi;
			$this->precioPin = $precioPi;
			$this->ingredientesPin = $ingredientesPi;
			$this->fotoPin = $fotoPin;
			$this->estadoPin = $estadoPin;
			$this->votoFinal = $votoFinal;
	}
	//////1
			 /* Devuelve el id del Pincho */
		  public function getIdPi() {
			return $this->idPincho;
		  }

		  /* Pone el id del Pincho */
		  public function setIdPi($idPi) {
			$this->idPincho = $idPincho;
		  }
	//////2
		  /* Devuelve el nombre del Pincho */
		  public function getNombrePi() {
			return $this->nombrePin;
		  }

		  /* Pone el nombre del Pincho */
		  public function setNombrePi($nombrePi) {
			$this->nombrePi = $nombrePi;
		  }
	//////3
		  /* Devuelve el precio del Pincho */
		  public function getPrecioPi() {
			return $this->precioPin;
		  }

		  /* Pone el tipo del Pincho */
		  public function setPrecioPi($precioPi) {
			$this->precioPi = $precioPi;
		  }
	//////4
		  /* Devuelve los ingredientes del Pincho */
		  public function getIngredientesPin() {
			return $this->ingredientesPi;
		  }

		  /* Pone los ingredientes del Pincho */
		  public function setIngredientesPin($ingredientesPin) {
			$this->ingredientesPin = $ingredientesPin;
		  }
	//////5
		  /* Devuelve la foto del Pincho */
		  public function getFotoPin() {
			return $this->fotoPin;
		  }

		  /* Pone la foto del Pincho */
		  public function setFotoPin($fotoPin) {
			$this->fotoPin = $fotoPi;
		  }
	//////6
		  /* Devuelve el estado del Pincho */
		  public function getEstadoPin() {
			return $this->estadoPin;
		  }

		  /* Pone el estado del Pincho */
		  public function setEstadoPin($estadoPin) {
			$this->estadoPin = $estadoPin;
		  }
	//////7
		  /* Devuelve el ParticipanteEmail del Pincho */
		  public function getVotoFinal() {
			return $this->votoFinal;
		  }

		  /* Pone el ParticipanteEmail del Pincho */
		  public function setVotoFinal($votoFinal) {
			$this->votoFinal = $votoFinal;
		  }
	


		//Conectamos con el gestor de la bd
		ConectarBD();
		
	  public function consultaPincho(){
		//$currentuser = $_SESSION["currentuser"];
		//Realizamos la consulta
		$consulta = mysql_query("SELECT * FROM pincho WHERE idPincho='$pincho'")
		or die('No se puede hacer la consulta'. mysql_error());
		
		/*$stmt = $db->prepare("SELECT * FROM pincho where ParticipanteEmail=?");
		$stmt->execute(array(($currentuser->getEmailU())));
		$pinchos_db=$stmt->fetchAll(PDO::FETCH_ASSOC);
		$pinchos=array();

		foreach ($pinchos_db as $pincho) {
		  array_push($pinchos, new Pincho($pincho["idPincho"],
		  $pincho["nombrePin"],
		  $pincho["precioPin"],
		  $pincho["ingredientesPin"],
		  $pincho["fotoPin"],
		  $pincho["estadoPin"],
		  $pincho["votoFinal"]));
		}
		return $pinchos;
	  }*/
  }
  /*
	  public function lista()
	  {
		  
			$nombre=$_POST['idPincho'];


			$sql = "select * from usuario where (Nombre like '%".$idPincho."%') and (Apellidos like '%".$apellidos."%')" ;
			$result = mysql_query ($sql)or die('No funsiona');
			// Listamos
			while ($row = mysql_fetch_row($result)){
				 echo '<tr><td>'.$row[0].'</td><td>'.$row[2];
		   }
	  }
	  */
  }
  ?>