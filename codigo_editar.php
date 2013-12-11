<html>
<head>

</head>
  <body background="fondo1.jpg">
		  <center>
      <fieldset style="width:450px; border:4px solid #40a800; background:#34526f;">
      <legend style="color:#33ffcc;"><h2>estado de la edicion</h2></legend>

<?php

if(isset($_POST['id'])){
$id = $_POST['id'];

	  
	echo  "<DIV ALIGN=center>";
     $id= $_POST['id'];
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
	 
$link = mysql_connect("127.0.0.1", "root",""); 
mysql_select_db("directorio", $link)or die(mysql_error());

$sql = "UPDATE  `directorio`.`datos` SET  `nombre` = '$nombre',".
"`ap` =  '$ap',".
"`am` =  '$am',".
"`domicilio` =  '$domicilio',".
"`colonia` =  '$colonia',".
"`cp` =  '$cp',".
"`municipio` =  '$municipio',".
"`estado` =  '$estado',".
"`pais` =  '$pais',".
"`telefono` =  '$telefono',".
"`celular` =  '$celular' WHERE  `datos`.`id` ='".$id."'";

  mysql_query($sql);
   
   echo "<font color=\"white\"> Se ha editado Con exito</font>";
  echo "<br/>";
   echo "<br/>";
  echo "<a href=panel.php><input type='button' value='Aceptar'></a>";
  
	
	echo "</div>"; 
echo "</center>";
 echo    "</fieldset>";
	 
	 echo"</center>";
	 }else{
	 echo "No tiene permiso para ingresar a esta pagina.";
	 }
    ?>
	
     </fieldset>
	 
	 </center>
	 </body>
	 </html>