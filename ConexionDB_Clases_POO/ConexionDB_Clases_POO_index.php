<?php
	require('ConexionDB_Clases_POO_devuelveproductos.php');

	$pais=$_GET["buscar"];
	$products=new ConexionDB_Clases_POO_devuelveproductos();


	$array_products=$products->get_productos($pais);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		foreach($array_products as $elemento){

			echo "<table><tr><td>";
			echo $elemento['CÓDIGOARTÍCULO']."</td><td>";
			echo $elemento['NOMBREARTÍCULO']."</td><td>";
			echo $elemento['SECCIÓN']."</td><td>";
			echo $elemento['PRECIO']."</td><td>";
			echo $elemento['FECHA']."</td><td>";
			echo $elemento['IMPORTADO']."</td><td>";
			echo $elemento['PAÍSDEORIGEN']."</td><td>";

			echo "<br>";
			echo "<br";

		}

	?>
</body>
</html>
