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

			$base=new PDO('mysql:host=localhost; dbname=curso_php_prueba_1','root','root');

			$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$base->exec("SET CHARACTER SET utf8");
 
			
			$sql="DELETE FROM PRODUCTOS WHERE CÓDIGOARTÍCULO=:c_art";
			$resultados=$base->prepare($sql);

			/*$resultados->execute(array(":secc"=>$busqueda_seccion,":orig"=>$busqueda_seccion_p_orig)); // segun el "?" que hay en la consulta.*/
			$resultados->execute(array(":c_art"=>$busqueda_cart));
			
			echo "Registro Eliminado";
			
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