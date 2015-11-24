<?php
	//se incluyen las funciones
    require_once '../../functions/BDconectar.php';

    //Conectarmos con la bd
    ConectarBD();

    //Realizamos la consulta
    $consulta = mysql_query("SELECT * FROM pincho")
    or die('No se puede hacer la consulta'. mysql_error());

    while($row = mysql_fetch_array($consulta)) {
      echo "<tr><td><a href='pinchocompleta.php?pincho=".$row['idPincho']."'>".$row['nombrePIN']."</a>
  		<td>".$row['precioPIN']."</td>
      <td><center><img src=".$row["fotoPIN"]."class=img-responsive tam></center></td></tr>";
  }
?>
