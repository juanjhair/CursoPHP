<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<?php
	
	function ejecuta_consulta($labusqueda){
		
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
		
		$consulta="SELECT * FROM productos WHERE NOMBREARTÍCULO like '%$labusqueda%'";
		
		$resultado=mysqli_query($conexion,$consulta);
		
		//ASOCIATIVO
		while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC))
		{
			echo "<table><tr><td>"; // td para celdas
			
			echo $fila['NOMBREARTÍCULO']."</td><td>";
			echo $fila['FECHA']."</td><td>";
			echo $fila['PRECIO']."</td></tr></table>";
			echo "<br>";
		}
	
		mysqli_close($conexion);
	}
?>
</head>

<body>
	<?php
		
		$mipag=$_SERVER["PHP_SELF"]; // indica cual de las paginas del servidor llamar
		
		if(isset($_GET["buscar"])==false){
			
			echo("<form action='".$mipag."' method='get'>
			<label>Buscar:<input type='text' name='buscar'></label>
			<input type='submit' name='enviado' value='Dale!'>
			<input type='reset' name='Borrar' value='Borrar'>
			</form>");
		}
		else
		{
			ejecuta_consulta($_GET["buscar"]);
		}
	?>

</body>
</html>