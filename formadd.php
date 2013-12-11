<html>
<head>
</head>
<body background="fondo1.jpg">
<title> Insertar nuevos datos </title>
</head>

<body>
<CENTER>

<fieldset style="width:800px; border:4px solid #40a800; background:#34526f;">
<legend style="color:#33ffcc;"><h2>Agregar Nuevos Datos</h2></legend>
	  
<form action="insertar.php" method="post" name"form">
<span style="color: #ffffff;">
<br /><br />

	Nombre...............   
    <input type="text" name="name" /><br /><br />
	
	Apellido Paterno.. 
	<input type="text" name="paterno" /><br /><br />
	
	Apellido Materno.
	<input type="text" name="materno" /><br /><br />
	
	Domicilio..............
	<input type="text" name="dom"  /><br /><br />
	
	Colonia................
	<input type="text" name="col" /><br /><br />
	
	Codigo Postal......
	<input type="text" name="codigop" /><br /><br />
	
	Municipio.............
	<input type="text" name="mun" /><br /><br />
	
	Estado..................
	<input type="text" name="edo" /><br /><br />
	
	Pais......................
	<input type="text" name="country" /><br /><br />
	
	
	Telefono...............
	<input type="text" name="tel" /><br /><br />

	<span style="color: #ffffff;">Celular.................</span> 
    <input type="text" name="cel" /><br /><br />
    <br /><br /><br />
	</span> 
	<input type="submit" value="insertar datos" />
</form>
</CENTER> 
</body>
</html>