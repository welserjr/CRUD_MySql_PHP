<?php 
	include("conexion.php");
	$con = mysql_connect($host, $user, $pw)or die("Problemas al conectar server");

	mysql_select_db($db, $con)or die("Problemas al conectar db");

	$registro = mysql_query("SELECT * FROM codigof WHERE nombre = '$_POST[nombre]'") or die("Problemas en consulta: ".mysql_error());

	while($reg = mysql_fetch_array($registro))
	{
		echo $reg['nombre']."<br>";
		echo $reg['pw']."<br>";
	}
?>