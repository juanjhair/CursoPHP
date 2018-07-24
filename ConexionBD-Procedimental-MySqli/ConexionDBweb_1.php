<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php

	/*$db_host="localhost";
	$db_nombre="curso_php_prueba_1";
	$db_usuario="root";
	$db_contra="root";
	*/
	include("ConexionDBweb_1_part2.php");
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
	
	if(mysqli_connect_errno())
	{
		echo "Fallo al conectar con la BBDD";
		exit();
	}
	 mysqli_set_charset($conexion,"utf8"); // uso de caracteres latinos.
	 
	 mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la base de datos"); // quitando el nombre del connect , se puede escoger la base de datos con esta funcion. "or die" es para decir si no la escoge o no existe .
	
	$consulta="select * from datospersonales";
	
	$resultados=mysqli_query($conexion,$consulta);//LLAMADO RESULSET  se crea una tabla virtual en memoria que almeacena la informacion que da la consulta
	
	//$fila=mysqli_fetch_row($resultados); // Mira fila a fila , formando un array ,lo que el RESULSET tiene almacenado O resultado del mysqli_query.
	
	//echo $fila[0];
	
	while($fila=mysqli_fetch_row($resultados)){
		
		echo $fila[0]." ";
		echo $fila[1]." ";
		echo $fila[2]." ";
		echo $fila[3]."<br>";
	}
	
	
?>
</body>
</html>