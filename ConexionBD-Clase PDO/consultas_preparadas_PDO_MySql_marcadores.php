<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		try {
			$busqueda_seccion=$_GET["seccion"];
			$busqueda_seccion_p_orig=$_GET["p_orig"];

			$base=new PDO('mysql:host=localhost; dbname=curso_php_prueba_1','root','root');

			$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$base->exec("SET CHARACTER SET utf8");

			$sql="SELECT NOMBREARTÍCULO,PAÍSDEORIGEN,FECHA,PRECIO FROM PRODUCTOS WHERE SECCIÓN=:secc AND PAÍSDEORIGEN=:orig";

			$resultados=$base->prepare($sql);

			$resultados->execute(array(":secc"=>$busqueda_seccion,":orig"=>$busqueda_seccion_p_orig)); // segun el "?" que hay en la consulta.


			while($registro=$resultados->fetch(PDO::FETCH_ASSOC)){

				echo "<table><tr><td>"; // td para celdas
				echo $registro['NOMBREARTÍCULO']."</td><td>";
				echo $registro['FECHA']."</td><td>";
				echo $registro['PRECIO']."</td></tr></table>";
				echo "<br>";
			}
			$resultados->closeCursor();


		} catch (Exception $e) {

			die('error: '.$e->getMessage);
		}
		finally{
			$base=null;
		}

	?>
</body>
</html>
