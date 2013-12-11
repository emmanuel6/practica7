<html>
    <head>

    </head>
    <body background="fondo1.jpg">
		  <center>
      <fieldset style="width:450px; border:4px solid #40a800; background:#34526f;">
      <legend style="color:#33ffcc;"><h2>Ver datos de usuario</h2></legend>

	<?php
	if(isset($_GET['id']) && $_GET['id'] != ''){
	
	$link = mysql_connect("127.0.0.1", "root",""); 
mysql_select_db("directorio", $link)or die(mysql_error());
	
		$id = $_GET['id'];
		$q = "SELECT * FROM datos WHERE id='".$id."'";
		$ej=mysql_query($q)or die(mysql_error());
		$re=mysql_fetch_object($ej);	
	?>
	<center>
	 
	<!--<a style="color:white;" href="sesion.php"><h4>cerrar sesion</h4></a>
<form method="post" action="panel.php">-->
</br></br>

    <span style="color:white;">ID:  </span>
	<span style="color:#ADFF2F;"><?php echo $re->id; ?></br></br>
   
<span style="color:white;">Nombre: </span>
   <?php echo $re->nombre; ?>
   <br/>
   <br/>
<span style="color:white;">Apellido Paterno: </span>
   <?php echo $re->ap; ?>
   <br/>
   <br/>
<span style="color:white;">Apellido Materno: </span>
   <?php echo $re->am; ?>
   <br/>
   <br/>
<span style="color:white;">Domicilio: </span>
   <?php echo $re->domicilio; ?>
   <br/>
   <br/>
<span style="color:white;">Colonia: </span>
   <?php echo $re->colonia; ?>
   <br/>
   <br/>
<span style="color:white;">Codigo Postal: </span>
   <?php echo $re->cp; ?>
   <br/>
   <br/>
<span style="color:white;">Municipio: </span>
   <?php echo $re->municipio; ?>
   <br/>

   <br/>
<span style="color:white;">Estado:  </span>
   <?php echo $re->estado; ?>
   <br/>
   <br/>
<span style="color:white;">Pais:  </span>
   <?php echo $re->pais; ?>
   <br/>
   <br/>
<span style="color:white;">Telefono:  </span>
   <?php echo $re->telefono; ?>
   <br/>
   <br/>
<span style="color:white">Celular:  </span>
   <span style="color:#ADFF2F;"><?php echo $re->celular; ?></span>
   </span>
   <br/>
   <br/>




   
   <form method="post" action="panel.php">
   </DIV>
	   </center>
   <input type="submit" value="Aceptar" />

</form>

</div> 

     </fieldset>
	 
	 </center>
	 <?php
	 echo"</center>";
	 }else{
	 echo "No tiene permiso para ingresar a esta pagina.";
	 }
    ?>
 </body>
</html>