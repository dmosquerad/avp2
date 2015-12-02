
<html>
<head>
<title>
PRUEBAS Tabla
</title>
</head>
<body>
<table cellspacing="10" cellpadding="10" border="1">
 <tr>
    <td align="center">Se conecta bien (padre)
      <?php echo "+++";
    require_once("../../controller/prueba.php");
    ?>
    <td>
        <table cellspacing="2" cellpadding="2" border="6">
       <tr>
            <td>Tabla anidada, Celda (1,1) </td>
             <td> Tabla anidada, Celda (1,1) </td>
       </tr>
        </table>
    </td>
 </tr>
</table>
</body>
</html>
