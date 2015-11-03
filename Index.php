<?php
session_start();
	if(!isset($_SESSION["login"]))
	{
	 header("location:Login.php");
	  }
?>
	<h1>
	   <?php
	     echo "Bienvenido".$_SESSION["login"];
	    ?>
	</h1>

<br></br>
<html>
	<head>
		<title>Datos Personales</title>
	</head>
  <body>
	<form name = "form" action = "Procesar.php" method = "POST">
		<p> Formulario </p>
		<br>
			<label>Nombre</label>
			<input type = "text" name = "nombre" size = "10" maxlegth = "20" >			
			<br></br>  			

			<label>Apellido Paterno</label>
			<input type = "text" name = "apellidop" size = "10" maxlegth = "20">
			<br></br>

			<label>Apellido Materno</label>
			<input type = "text" name = "apellidom" size = "10" maxlegth = "20">
			<br></br>

			<input type = "submit" value = "Guardar">
   
		<a href =  "Logout.php">Cerrar Sesion</a>

   
  </form>
 </body>
</html> 