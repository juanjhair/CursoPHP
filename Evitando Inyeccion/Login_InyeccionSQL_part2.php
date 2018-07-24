<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style>

	table{
		width:50%;
		border:1px double #F00;
		background:#F93;
		margin:auto;
	}
</style>
</head>

<body>
<?php
	
	
	
	$db_host="localhost";
	$db_nombre="curso_php_prueba_1";
	$db_usuario="root";
	$db_contra="root";
	
	$conexion=mysqli_connect("$db_host","$db_usuario","$db_contra","$db_nombre");
	 //EVITANDO LA INYECCION
	$usuario=mysqli_real_escape_string($conexion,$_GET["usu"]);
	$contra=mysqli_real_escape_string($conexion,$_GET["con"]);
	/*
	$usuario=$_GET["usu"];
	$contra=$_GET["con"];*/

	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la BBDD";
		exit();
	}
	
	mysqli_set_charset($conexion,"utf8");
	
	//$consulta="SELECT * FROM productos WHERE NOMBREARTÍCULO like '%$busqueda%'"; CARACTERES COMODIN PARA BUSCARDOR
	
	//PARA INYECCION SQL
	$consulta="SELECT * FROM USUARIOS WHERE usuario='$usuario' and contra='$contra'";

	echo "$consulta <br><br>";
	
	$resultado=mysqli_query($conexion,$consulta);
	
	
	if(mysqli_num_rows($resultado)>0)
	{
		echo "Encontrado";
	}else
	{
		echo "No se ha encontrado";
	}
	//ASOCIATIVO
	/*while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC))
	{
		echo "<table><tr><td>"; // td para celdas
		echo $fila['usuario']."</td><td>";
		echo $fila['contra']."</td><td>";
		echo $fila['tfno']."</td><td>";
		echo $fila['direccion']."</td></tr></table>";
		echo "<br>";
	}*/

	mysqli_close($conexion);
		
?>
</body>
</html>