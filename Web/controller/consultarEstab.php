<?php
////listar establecimiento para la descripcion completa
function consultarEstab($participante)
{
  require_once '../../functions/BDconectar.php';

  //Conectarmos con la bd
  ConectarBD();

  //Realizamos la consulta
  $consulta = mysql_query("SELECT * FROM participante WHERE TablaUsuarios_login='$participante'")
  or die('No se puede hacer la consulta'. mysql_error());

  //creamos un array asociativo y extraemos la información
    while($fila = mysql_fetch_assoc($consulta))
    {
      return $fila;
    }
}

?>
