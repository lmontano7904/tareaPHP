<?php
session_start();
	if(isset($_SESSION["login"]))
	{
	 header("location:Index.php");
	  }
?>


<br></br>
<html>	
  <body>
	<form action = "Sesion.php" method = "POST">
		<head>
			<title>Inicio de Sesion</title>
		</head>
	<h1> Iniciar Sesión </h1>
		<br>
	</br>Usuario:
	</br>
    <input type = "text" name = "Usu" size = "10" maxlegth = "20">
	</br>

	<label>Password</label>
    <input type = "password" name = "Pas" size = "10" maxlegth = "20">
	<br></br>

   <input type = "submit" value = "Entrar">
  </form>
 </body>
</html> 

