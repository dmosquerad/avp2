<?php
header('Content-Type: text/xml');
echo '<markers>';
include ("conexion.php");
$sql=mysqli_query($con,"select * from participante");
while($row=mysqli_fetch_array($sql))
{
	echo "<marker lat='".$row['latitud']."' lng='".$row['longitud']."' >\n";
	echo "</marker>\n";
}
mysql_close($bd);
echo "</markers>\n";
?>
