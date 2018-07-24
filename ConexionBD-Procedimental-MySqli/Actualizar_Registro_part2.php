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
	
	$busqueda=$_GET["buscar"];
	$db_host="localhost";
	$db_nombre="curso_php_prueba_1";
	$db_usuario="root";
	$db_contra="root";
	
	$conexion=mysqli_connect("$db_host","$db_usuario","$db_contra","$db_nombre");
	
	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la BBDD";
		exit();
	}
	
	mysqli_set_charset($conexion,"utf8");
	
	$consulta="SELECT * FROM productos WHERE NOMBREARTÍCULO like '%$busqueda%'";
	
	$resultado=mysqli_query($conexion,$consulta);
	
	//INDEXADO
	/*while($fila=mysqli_fetch_row($resultado))
	{
		echo "<table><tr><td>"; // td para celdas
		for($i=0;$i<count($fila);$i++)
		{
			echo $fila[$i]."</td><td> ";
		}
		echo "</tr><table>";
		echo "<br>";
	}*/
	//ASOCIATIVO
	while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC))
	{
		echo "<form action='Actualizar_Registro_part3.php' method='get'>";
		echo "<input type='text' name='c_art' value='".$fila['CÓDIGOARTÍCULO']."'><br>";
		echo "<input type='text' name='n_art' value='".$fila['NOMBREARTÍCULO']."'><br>";
		echo "<input type='text' name='seccion' value='".$fila['SECCIÓN']."'><br>";
		echo "<input type='text' name='importado' value='".$fila['IMPORTADO']."'><br>";
		echo "<input type='text' name='precio' value='".$fila['PRECIO']."'><br>";
		echo "<input type='text' name='fecha' value='".$fila['FECHA']."'><br>";
		echo "<input type='text' name='p_orig' value='".$fila['PAÍSDEORIGEN']."'><br>";
		echo "<input type='submit' name='enviado' value='Actualizar!'>";
		echo"</form>";

	}

	mysqli_close($conexion);
		
?>
</body>
</html>