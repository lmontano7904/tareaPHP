<?php
  $user = $_POST["Usu"];
  $pass = $_POST["Pas"];
    
    if($user == "lmontano" && $pass = "1234"){
      //iniciar sesion
	session_start(); //Funcion para iniciar sesion
	$_SESSION["login"] = $user; //Almacenar variables de sesion
	$_SESSION["grupo"] = "lmontano";
	 header ("location:Index.php"); //redireccionar a otra pagina
         }
	  else{
                echo"Datos Incorrectos";
		echo'<br/><a href = "Login.php">regresar</a>';
		}
	     











