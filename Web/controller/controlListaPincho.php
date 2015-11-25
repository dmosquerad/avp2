<?php
	//se incluyen las funciones
    require_once '../../functions/BDconectar.php';

    //Conectarmos con la bd
    ConectarBD();

    //Realizamos la consulta
    $consulta = mysql_query("SELECT * FROM pincho")
    or die('No se puede hacer la consulta'. mysql_error());

    while($row = mysql_fetch_array($consulta)) {
      echo "<tr>
      <td><a href='pinchocompleta.php?pincho=".$row['idPincho']."'><img src=".$row["fotoPIN"]." height=200px width=300px></a></td>
      <td><table><tr><td>".$row['nombrePIN']."</td></tr>
  		<tr><td>".$row['precioPIN']."</td></tr></table>
      </td>
      </tr>";
  }
?>
