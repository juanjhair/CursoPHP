<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		try {
			$busqueda_cart=$_POST["c_art"];
			$busqueda_seccion=$_POST["seccion"];
			$busqueda_n_art=$_POST["n_art"];
			$busqueda_precio=$_POST["precio"];
			$busqueda_fecha=$_POST["fecha"];
			$busqueda_importado=$_POST["importado"];
			$busqueda_porig=$_POST["p_orig"];

			$base=new PDO('mysql:host=localhost; dbname=curso_php_prueba_1','root','root');

			$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$base->exec("SET CHARACTER SET utf8");
 
			
			$sql="INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO,SECCIÓN,NOMBREARTÍCULO,PRECIO,FECHA,IMPORTADO,PAÍSDEORIGEN)
			VALUES (:c_art,:seccion,:n_art,:precio,:fecha,:importado,:p_orig)";

			$resultados=$base->prepare($sql);

			/*$resultados->execute(array(":secc"=>$busqueda_seccion,":orig"=>$busqueda_seccion_p_orig)); // segun el "?" que hay en la consulta.*/
			$resultados->execute(array(":c_art"=>$busqueda_cart,
									":seccion"=>$busqueda_seccion,
									":n_art"=>$busqueda_n_art,
									":precio"=>$busqueda_precio,
									":fecha"=>$busqueda_fecha,
									":importado"=>$busqueda_importado,
									":p_orig"=>$busqueda_porig)); 
			echo "Registro insertado";

			

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