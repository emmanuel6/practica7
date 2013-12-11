<html>
<HEAD>
<HEAD>
    <body background="fondo1.jpg">

<BODY>
<CENTER>
<fieldset style="width:800px; border:4px solid #40a800; background:#34526f;">
<legend style="color:#33ffcc;"><h2>Estado de la inserccion..</h2></legend>
<?php

$host = "127.0.0.1";
$user = "root";
$pw = "";
$db = "directorio";


  if(isset($_POST['name']) && !empty($_POST['name']) &&
     isset($_POST['paterno']) && !empty($_POST['paterno']) &&
     isset($_POST['materno']) && !empty($_POST['materno']) &&
	 isset($_POST['dom']) && !empty($_POST['dom']) &&
	 isset($_POST['col']) && !empty($_POST['col']) &&
	 isset($_POST['codigop']) && !empty($_POST['codigop']) &&
	 isset($_POST['mun']) && !empty($_POST['mun']) &&
	 isset($_POST['edo']) && !empty($_POST['edo']) &&
	 isset($_POST['country']) && !empty($_POST['country']) &&
	 isset($_POST['tel']) && !empty($_POST['tel']) &&
	 isset($_POST['cel']) && !empty($_POST['cel']))
	 {
	 
	 $nombre = $_POST["name"];
	 $ap = $_POST["paterno"];
	 $am = $_POST["materno"];
	 $domicilio = $_POST["dom"];
	 $colonia = $_POST["col"];
	 $cp = $_POST["codigop"];
	 $municipio = $_POST["mun"];
	 $estado = $_POST["edo"];
	 $pais = $_POST["country"];
	 $telefono = $_POST["tel"];
	 $celular = $_POST["cel"];
	 
  //conexion
     $con= @mysql_connect($host, $user, $pw) or die ("Error al conectar a la base de datos.");
     mysql_select_db($db, $con) or die ("Error al conectar a la base de datos.");
	
    mysql_query("INSERT INTO `directorio`.`datos` (`id`, `nombre`, `ap`, `am`, `domicilio`, `colonia`, `cp`, `municipio`, `estado`, `pais`, `telefono`, `celular`) VALUES (NULL, '$nombre','$ap','$am','$domicilio','$colonia','$cp','$municipio','$estado','$pais','$telefono','$celular');", $con);	
	//echo "Datos insertados Correctamente!";
	echo "<font color=\"white\"> datos insertados correctamente</font>";
	
	 }else{
	 	echo "<font color=\"red\"> Error al insertar datos!</font>";
	 }
?>

<form action="panel.php" method="post" name"form">
<input type="submit" value="Aceptar y volver al menu" />
</form>

</CENTER>
</BODY>
</HTML>
