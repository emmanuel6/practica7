<html>
<HEAD>
<HEAD>
	<body background="fondo1.jpg">
	
<BODY>

<CENTER>
<fieldset style="width:800px; border:4px solid #40a800; background:#34526f;">
<legend style="color:#33ffcc;"><h2>Estado del eliminado..</h2></legend>
<?php

//include("opcdel.php");

$host = "127.0.0.1";
$user = "root";
$pw = "";
$db = "directorio";

	 
	   if(isset($_GET['id']) && !empty($_GET['id']))
	 {
	 
$id=$_GET["id"];


	 
  //conexion
$con= @mysql_connect($host, $user, $pw) or die ("Error al conectar a la base de datos.");
mysql_select_db($db, $con) or die ("Error al conectar a la base de datos.");

mysql_query("SELECT id FROM datos WHERE id='$id'", $con)
or die ("problemas al realizar la consulta: ".mysql_error() );


mysql_query("DELETE FROM datos WHERE id='$id';", $con);
	echo "<font color=\"white\"> datos Eliminados correctamente</font>";
}else{
	echo "<font color=\"red\"> Problemas al eliminar datos</font>";
	 }
	
?>
</br></br>
<a href="panel.php" > 
<input style="background-color:#003366; color:#33ffff;" type="button" name="boton" value="Aceptar y volver al Menu Principal" /> </a>
</form>

</FIELDSET>
</CENTER>

</BODY>
</HTML>