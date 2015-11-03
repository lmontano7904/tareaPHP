 <?php
	$nom = $_POST["nombre"];
	echo "<br/> Nombre: ". $nom. "";
	$ap = $_POST["apellidop"];
	echo "<br/>Apellido Paterno:". $ap. "";
	$am = $_POST["apellidom"];
	echo  "<br/>Apellido Materno:" . $am. "";
?>
<br></br>
<html>
<body>
<a href =  "Index.php">Regresar</a>
<br></br>
<a href =  "Logout.php">Cerrar Sesion</a>

</body>
</html>