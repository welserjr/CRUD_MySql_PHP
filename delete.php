<?php 
	include("conexion.php");
	$con = mysql_connect($host, $user, $pw)or die("Problemas en Server");
	mysql_select_db($db, $con)or die("Problemas en BD");

	$reg = mysql_query("SELECT id FROM codigoF WHERE nombre = '$_POST[nombre]'", $con);

	if($re = mysql_fetch_array($reg)) {
		mysql_query("DELETE FROM codigoF WHERE nombre = '$_POST[nombre]'");
		echo "Datos Eliminados";
	}else{
		echo "Datos no han sido eliminados";	
	}
?>