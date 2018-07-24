<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style>
		.resaltar{
			color:#F00;
			font-weight:bold;
		}
</style>
</head>

<body>
<?php
	//echo "<p class='resaltar'> Esto es un ejemplo de frase </p>";
	$variable1="casa";
	$variable2="CASA";
	$resultado=strcmp($variable1,$variable2);// 0 si son iguales
	/*$resultado2=strcasecmp($variable1,$variable2); // 1 si son iguales
	echo "El resultado es $resultado2 <br>";*/
	
	if($resultado){
		echo "No coinciden";
	}else{
		echo "Coinciden";
	}
	


?>
</body>
</html>