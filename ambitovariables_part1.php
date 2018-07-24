<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>
<?php
	$nombre="Juan";
	/*function dameNombre(){
		global $nombre;//declarada global para uqe accesa a la variable anterior
			//$nombre="Maria"; // esta seria otra variable diferente
		$nombre="El nombre es ".$nombre; // accede a la variable global
	}*/
	include ("ambitovariables_part2.php");
	dameNombre();
	echo $nombre;


?>
</body>
</html>
