
<?php
require_once(__DIR__."/../model/Pincho.php");

public function __construct() {
  parent::__construct();

  /*if(!$_SESSION["currentuser"]){
    echo "<script>window.location.replace('index.php');</script>";
  }*/

  $this->pincho = new Pincho();

  ?>
