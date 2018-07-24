<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

</head>
<body>
    <?php
      require("datos_conexion.php");


      $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

    	if(mysqli_connect_errno())
    	{
    		echo "Fallo al conectar con la BBDD";
    		exit();
    	}
    	 mysqli_set_charset($conexion,"utf8"); // uso de caracteres latinos.

    	 mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la base de datos");

       $consulta="SELECT FOTO FROM PRODUCTOS WHERE CÓDIGOARTÍCULO='AR01'";

       $resultado=mysqli_query($conexion,$consulta);

       while($fila=mysqli_fetch_array($resultado)){

          $ruta_img=$fila["FOTO"];

       }

    ?>

    <div>
      <img src="/intranet/uploads/<?php echo $ruta_img;?>" alt="IMAGEN DEL PRIMER ALTÍCULO" width="25%"/>

    </div>
</body>
</html>
