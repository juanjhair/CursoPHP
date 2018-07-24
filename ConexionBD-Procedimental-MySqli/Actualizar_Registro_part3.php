<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<style>
	table{
		width:50%;
		border:1px dotted #FF0000;
		background:#CF6;
		margin:auto;

</style>
</head>

<body>
<?php
	
	$db_host="localhost";
	$db_nombre="curso_php_prueba_1";
	$db_usuario="root";
	$db_contra="root";

	$cod = $_GET["c_art"];
	$sec = $_GET["seccion"];
	$nom = $_GET["n_art"];
	$pre = $_GET["precio"];
	$fec = $_GET["fecha"];
	$imp = $_GET["importado"];
	$por = $_GET["p_orig"];
	
	if($cod!=null ){ // Y ASI SUCESIVAMENTE PUEDE VALIDARSE 
			$conexion=mysqli_connect("$db_host","$db_usuario","$db_contra","$db_nombre");
		
		if(mysqli_connect_errno()){
			echo "Fallo al conectar con la BBDD";
			exit();
		}
		
		mysqli_set_charset($conexion,"utf8");
		
		$consulta="UPDATE productos SET CÓDIGOARTÍCULO='$cod', SECCIÓN='$sec', NOMBREARTÍCULO='$nom', PRECIO='$pre', FECHA='$fec', IMPORTADO='$imp', PAÍSDEORIGEN='$por' WHERE CÓDIGOARTÍCULO='$cod'";
		
		$resultado=mysqli_query($conexion,$consulta);

		if($resultado==false){ // si hay error 
			echo "Error en la consulta";
		}
		else{
			echo " Registro guardado";


			echo "<table>
					<tr><td>$cod</td>
					<tr><td>$sec</td>
					<tr><td>$nom</td>
					<tr><td>$pre</td>
					<tr><td>$fec</td>
					<tr><td>$imp</td>
					<tr><td>$por</td>
				</table>";
		}

		mysqli_close($conexion);
	}
	else{
		echo "EL CODIGO ES NULO ";
	}
	
		
?>

</body>
</html>