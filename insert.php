<?php
	include("conexion.php");
	if(isset($_POST['nombre']) && !empty($_POST['nombre']) && 
		isset($_POST['pw']) && !empty($_POST['pw'])){

		$con = mysql_connect($host, $user, $pw)or die("Problemas al conectar");
		mysql_select_db($db, $con)or die("Problemas al conectar la BD");

		$nombre = $_POST['nombre'];
		$pw = $_POST['pw'];

		mysql_query("INSERT INTO codigoF(nombre, pw) VALUES('$nombre', '$pw')", $con);
		echo "Datos Insertados";
	}else{
		echo "Problemas al Insertar Datos";
	}

?>