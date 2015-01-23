<?php 
	include("conexion.php");
	$con = mysql_connect($host, $user, $pw)or die("Problemas en Server");
	mysql_select_db($db, $con)or die("Problemas con BD");

	mysql_query("UPDATE codigoF SET nombre = '$_POST[nuevo]' WHERE nombre = '$_POST[viejo]'")or die(mysql_error());

	echo "Actualización Correcta";
?>