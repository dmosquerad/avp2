<?php
//session_start();
require_once("../../model/modeloPincho.php");


/* Comprobamos si los datos llegan del formulario de registro de pinchos */
/*
if (isset($_POST["idPincho"]) && isset($_POST["precioPIN"]) && isset($_POST["fotoPIN"]) && isset($_POST["descripcionPIN"]) && isset($_POST["nombrePIN"]) && isset($_POST["ingredientesPIN"]) && isset($_POST["Participante_TablaUsuarios_login"])
&& isset($_POST["votoPOP"]) && isset($_POST["finalista"]) && isset($_POST["estadoPIN"])) {
    $pincho = array();
    $pincho["idPincho"] = $_POST["idPincho"];
    $pincho["precioPIN"] = $_POST["precioPIN"];
    $pincho["fotoPIN"] = $_POST["fotoPIN"];
    $pincho["descripcionPIN"] = $_POST["descripcionPIN"];
    $pincho["nombrePIN"] = $_POST["nombrePIN"];
    $pincho["ingredientesPIN"] = $_POST["ingredientesPIN"];
    $pincho["Participante_TablaUsuarios_login"] = $_POST["Participante_TablaUsuarios_login"];
    $pincho["votoPOP"] = $_POST["votoPOP"];
    $pincho["finalista"] = $_POST["finalista"];
    $pincho["estadoPIN"] = $_POST["estadoPIN"];
} else {
        //Procesamiento de futuras peticiones que vengan por GET
        echo("No recibe los datos del GET");
    }
}
*/

//ver el pincho breve
echo "111111";
function consultarPincho()
{
    echo "ooooo";
/*
    $p = new Pincho();
    $v = $p->listarPinchos();
    $nombre = $v["nombrePIN"];
    */
    header("Location:../../view/pinchos/pinchobreve.php?nombrePIN=$nombre");//&fotoPIN=$foto&descripcionPIN=$descripcion");
    /*
    if($bool == false){
        header("Location: ../../view/error/errorPincho1.php");
    }else{
        $nombre = $bool["nombrePIN"];
        /*$foto = $bool["fotoPIN"];
        $descripcion = $bool["descripcionPIN"];*/
/*
        header("Location:../../view/pinchos/pinchobreve.php?nombrePIN=$nombre");//&fotoPIN=$foto&descripcionPIN=$descripcion");
        */
    //}
  }

/*
function verPincho() {
    $p = new Pincho();

    $boolean = $p->consultarPincho();
    if ($boolean == false) {
        header("Location:../../view/error/errorPincho1.php");
    } else {


        $nombre = $boolean["nombrePIN"];
        $foto = $boolean["fotoPIN"];
        $descripcion = $boolean["descripcionPIN"];

        header("Location:../../view/pinchobreve.php?nombrePIN=$nombre&fotoPIN=$foto&descripcionPIN=$descripcion");
      }

    }
*/
?>
