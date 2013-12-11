<html>
    <head>

    </head>
    <body background="fondo1.jpg">
		  <center>
      <fieldset style="width:450px; border:4px solid #40a800; background:#34526f;">
      <legend style="color:#33ffcc;"><h2>Edicion de Datos de Usuario</h2></legend>

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
	 
	<a style="color:white;" href="sesion.php"><h4>cerrar sesion</h4></a>
<form method="post" action="codigo_editar.php">
</br></br>
	<input type="hidden" name="id" value="<?php echo $re->id; ?>"/>
   
<span style="color:white;">Nombre</span></br>  
   <input type="text" size="40" maxlength="255"  name="name" style="width: 320px; height: 25px" value="<?php echo $re->nombre; ?>"/>
   <br/>
   <br/>
<span style="color:white;">Apellido Paterno</span></br>
   <input type="text" size="40" maxlength="255"  name="paterno" style="width: 320px; height: 25px" value="<?php echo $re->ap; ?>"/>
   <br/>
   <br/>
<span style="color:white;">Apellido Materno</span></br>
   <input type="text" size="40" maxlength="255"  name="materno" style="width: 320px; height: 25px" value="<?php echo $re->am; ?>"/>
   <br/>
   <br/>
<span style="color:white;">Domicilio</span></br>
   <input type="text" size="40" maxlength="255" name="dom" style="width: 320px; height: 25px" value="<?php echo $re->domicilio; ?>"/>
   <br/>
   <br/>
<span style="color:white;">Colonia</span></br>
   <input type="text" size="40" maxlength="255"  name="col" style="width: 320px; height: 25px" value="<?php echo $re->colonia; ?>"/>
   <br/>
   <br/>
<span style="color:white;">Codigo Postal</span></br>
   <input type="text" size="40" maxlength="255"  name="codigop" style="width: 320px; height: 25px" value="<?php echo $re->cp; ?>"/>
   <br/>
   <br/>
<span style="color:white;">Municipio</span></br>
   <input type="text" size="40" maxlength="255"  name="mun" style="width: 320px; height: 25px" value="<?php echo $re->municipio; ?>"/>
   <br/>

   <br/>
<span style="color:white;">Estado</span></br>
   <input type="text" size="40" maxlength="255"  name="edo" style="width: 320px; height: 25px" value="<?php echo $re->estado; ?>"/>
   <br/>
   <br/>
<span style="color:white;">Pais</span></br>
   <input type="text" size="40" maxlength="255"  name="country" style="width: 320px; height: 25px" value="<?php echo $re->pais; ?>"/>
   <br/>
   <br/>
<span style="color:white;">Telefono</span></br>
   <input type="text" size="40" maxlength="255"  name="tel" style="width: 320px; height: 25px" value="<?php echo $re->telefono; ?>"/>
   <br/>
   <br/>
<span style="color:white;">Celular</span></br>
   <input type="text" size="40" maxlength="255"  name="cel" style="width: 320px; height: 25px" value="<?php echo $re->celular; ?>"/>
   <br/>
   <br/>




   
   <form method="post" action="panel.php">
   </DIV>
	   </center>
   <input type="submit" value="Guardar" />

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