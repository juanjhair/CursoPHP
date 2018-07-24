<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

	$alimentos=array("fruta"=>array("tropical"=>"kiwi",
									"citrico"=>"mandarina",
									"otros"=>"manzana"),
					 "leche"=>array("animal"=>"vaca",
					 				"vegetal"=>"coco"),
					 "carne"=>array("vacuno"=>"lomo",
					 				"porcino"=>"pata"));
									
	/*foreach ($alimentos as $clave1=>$valor1) // valor1 identifica al segundo array
	{
		echo "$clave1:<br>";
		
		while(list($clave,$valor)=each($valor1)) // lista de forma separada la clave y el valor del segundo array
		{
			echo "$clave=$valor<br>";
		}
		echo "<br>";
		
	}
	
	*/
	echo var_dump($alimentos);
	
?>
</body>
</html>