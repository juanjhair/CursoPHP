<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$conexion=new mysqli("localhost","root","root","curso_php_prueba_1");

		if($conexion->connect_errno){
			echo "Falló conexion".$conexion->connect_erro;
		}

		$conexion->set_charset("utf8");

		$sql="SELECT * FROM PRODUCTOS";

		$resultado=$conexion->query($sql);

		if($conexion->errno)
		{
			die($conexion->errno);
		}
		//ASOCIATIVO
		/*while($fila=$resultado->fetch_assoc())
		{
			echo "<table><tr><td>"; // td para celdas
			
			echo $fila['NOMBREARTÍCULO']."</td><td>";
			echo $fila['FECHA']."</td><td>";
			echo $fila['PRECIO']."</td></tr></table>";
			echo "<br>";
		}*/
		//INDEXADO
		while($fila=$resultado->fetch_array())
		{
			echo "<table><tr><td>"; // td para celdas
			
			echo $fila[0]."</td><td>";
			echo $fila[1]."</td><td>";
			echo $fila[2]."</td></tr></table>";
			echo "<br>";
		}

		$conexion->close();
	?>
</body>
</html>