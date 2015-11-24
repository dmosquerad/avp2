<?php
	//se incluyen las funciones
    require_once '../../functions/BDconectar.php';

    //Conectarmos con la bd
    ConectarBD();

    //Realizamos la consulta
    $consulta = mysql_query("SELECT * FROM participante")
    or die('No se puede hacer la consulta'. mysql_error());

    while($row = mysql_fetch_array($consulta)) {
      echo "<tr>
      <td><a href='estabcompleto.php?participante=".$row['TablaUsuarios_login']."'><img src=".$row["fotoPAR"]." height=300px width=400px></a></td>
      <td><table><tr><td><h2>horario: </h2>".$row['horarioPAR']."</td></tr>
  		<tr><td><h2>Coordenadas Restaurantes: </h2>".$row['coordenadasPAR']."</td></tr></table>
      </td>
      </tr>";
  }
?>
