<?php 
session_start();
if(!isset($_SESSION['codigo'])){
	header('Location: sesion.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body background="fondo1.jpg">
	<center>
<fieldset style="width:800px; border:4px solid #40a800; background:#34526f;">
      <legend style="color:#33ffcc;"><h2>Menu</h2></legend>
	  
	  <DIV ALIGN=left>
	  
	  <!-- Tabla-->
	  <table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt"><tr>
<td><font size=2 color=\33ccff\ face="verdana"><b>ID</b></font></td>
<td><font size=2 color=\ffffff\ face="verdana"><b>Nombre</b></font></td>
<td><font size=2 color=\ffffff\ face="verdana"><b>Apellido Paterno</b></font></td>
<td><font size=2 color=\ffffff\ face="verdana"><b>Apellido Materno</b></font></td>
<td><font size=2 color=\ffffff\ face="verdana"><b>Telefono</b></font></td>
<td><font size=2 color=\ffffff\ face="verdana"><b>Opciones</b></font></td>
</tr>

	
<?php  

  $link = @mysql_connect("localhost", "root","")
      or die ("Error al conectar a la base de datos.");
  @mysql_select_db('directorio')
      or die ("Error al conectar a la base de datos.");

  $query = "SELECT id, nombre, ap, am, telefono FROM datos" ;
  $result = mysql_query($query);

  while($row = mysql_fetch_array($result))
  {

	echo "<tr><td width=\"25%\"><font color=\00ff00\ face=\"verdana\">" . 
	    $row["id"] . "</font></td>";
    echo "<td width=\"25%\"><font color=\ffffff\ face=\"verdana\">" . 
	    $row["nombre"] . "</font></td>";
    echo "<td width=\"25%\"><font color=\ffffff\ face=\"verdana\">" . 
	    $row["ap"] . "</font></td>";
    echo "<td width=\"25%\"><font color=\ffffff\ face=\"verdana\">" . 
	    $row["am"] . "</font></td>";
	echo "<td width=\"25%\"><font color=\ffffff\ face=\"verdana\">" . 
	    $row["telefono"] . "</font></td>";
	echo "<td width=\"25%\"><font color=\ffffff\ face=\"verdana\"><a style='color:white;' href=\"ver.php?id=".$row["id"]."\"> Ver </a>        <a style='color:white;' href=\"editar.php?id=".$row["id"]."\"> Editar </a> <a style='color:white;' href=\"eliminar.php?id=".$row["id"]."\"> Eliminar </a></font></td>";
   
  }
  mysql_free_result($result);
  mysql_close($link);
?>
</table>
	  

   <div>
<br/>
      <br/>
	  
<span style="color: #ADFF2F;">Opciones:</span></br>

<a href="formadd.php"> 
<input style="background-color:#003366; color:#33ffff;" type="button" name="boton" value="     Insertar datos    " /> </a>

</br></br>
	  
<a href="sesion.php" > 
<input  style="background-color: #660000; color:#FFFF00" type="button" name="boton" value="    Cerrar Sesion    " /> </a>


</form>

</div> 
</center>
     </fieldset>   
 </body>
</html>