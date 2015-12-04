<?php
class BD {
		protected $connect;

		public function __construct(){
			$aux=mysql_connect('localhost','g42','g42');
			if(!$aux){
				die('No es posible conectar al gestor de bd'. mysql_error());
			}
			mysql_select_db('g42',$aux);
			$this->connect=$aux;
		}

		public function getConnect(){
			return $this->connect;
		}
}
?>
