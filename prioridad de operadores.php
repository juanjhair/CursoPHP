<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

	$var1=true;
	$var2=false;
	$resultado=$var1 && $var2;//resultado=false , uso de prioridades
	//$resultado=$var1 and $var2;//resultado=true
	if($resultado==true)
	{
		echo "Correcto";
	}else
	{
		echo"Incorrecto";
	}
?>
</body>
</html>