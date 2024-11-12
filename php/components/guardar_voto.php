<?php
	session_start();

	include("../utils/conexion.php"); 
	conectar();
	
	//echo $_SERVER['PHP_SELF'];
	$sql = mysqli_query($con, "INSERT INTO votos (id_disfraz, id_usuario) VALUES ( {$_POST['id']}, {$_SESSION['id']})");
	
	if(!mysqli_error($con))
		echo "Voto emitido correctamente";
	else
		echo "Error: no se pudo emitir el voto";

	
?>