<?php 
include("config.php"); 
$sql = "SELECT * FROM personas";
$rs = mysql_query($sql) or die("Error al intentar ejecutar la instrucción SQL ".mysql_error());
if(mysql_num_rows($rs) > 0) {

?>
<p><strong>LISTADO DE REGISTROS</strong></p>
  <table id="tblRegistros" width="724" border="1">
    <tr>
      <td>ID</td>
      <td>Identificación</td>
      <td>Nombres</td>
      <td>Apellidos</td>
      <td>Celular</td>
      <td>Email</td>
      
    </tr>
   <?php while($row = mysql_fetch_array($rs)) { ?>
    <tr>
      <td><?php echo $row["id"]; ?></td>
      <td><?php echo $row["identificacion"]; ?></td>
      <td><?php echo $row["nombres"]; ?></td>
      <td><?php echo $row["apellidos"]; ?></td>
      <td><?php echo $row["celular"]; ?></td>
      <td><?php echo $row["email"]; ?></td>
    </tr>
 
	<?php
     }
	 ?>
  </table>
<?php
	} else {
		echo 'No hay registros para mostrar';
	}
	mysql_close($link);
?>