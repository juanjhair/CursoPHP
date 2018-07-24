<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		try {
			$base=new PDO('mysql:host=localhost; dbname=curso_php_prueba_111','root','root');
			echo "Conexion tuvo exito";
		} catch (Exception $e) {
			die('error: '.$e->getMessage);
		}
		finally{
			$base=null;
		}
		
	?>
</body>
</html>