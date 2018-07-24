<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

</head>

<body>
<?php
	
	$pais=$_GET["buscar"];
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
	
	//PASO 1
	$sql="SELECT CÓDIGOARTÍCULO,SECCIÓN,PRECIO,PAÍSDEORIGEN from PRODUCTOS WHERE PAÍSDEORIGEN= ?";
	//PASO 2
	$resultado=mysqli_prepare($conexion,$sql);//devuelve verdadero o false
	//PASO 3
	$ok=mysqli_stmt_bind_param($resultado,"s",$pais); // el segundo aprametro hace referencia al tipo de dato , "s" para string , "d" apra decimal , devuelve tru o false
	//PASO 4
	$ok=mysqli_stmt_execute($resultado);
	if($ok==false){
		echo "Error al ejecutar la consulta";
	}
	else
	{
		//PASO 5
		$ok=mysqli_stmt_bind_result($resultado,$codigo,$seccion,$precio,$pais);// a partir del segundo parametro , se colocan tantos parametros como datos que se piden en la consulta
		echo "Articulos encontrados: <br><br>";

		while(mysqli_stmt_fetch($resultado)){

			echo $codigo." ".$seccion." ".$precio." ".$pais."<br>";

		}
		mysqli_stmt_close($resultado);
	}








	mysqli_close($conexion);
		
?>
</body>
</html>