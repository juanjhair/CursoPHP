<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

</head>
<body>
    <?php

      $Id="";
      $contenido="";
      $tipo="";
      require("datos_conexion.php");


      $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

    	if(mysqli_connect_errno())
    	{
    		echo "Fallo al conectar con la BBDD";
    		exit();
    	}
    	 mysqli_set_charset($conexion,"utf8"); // uso de caracteres latinos.

    	 mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la base de datos");

       $consulta="SELECT * FROM archivos WHERE Id='2'";

       $resultado=mysqli_query($conexion,$consulta);

       while($fila=mysqli_fetch_array($resultado)){

          $Id=$fila["Id"];
          $contenido=$fila["Contenido"];
          $tipo=$fila["Tipo"];

       }
       echo "Id: ".$Id."<br>";
       echo "Tipo: ".$tipo."<br>";
       //echo "Contenido: ".$contenido;//ESTA CODIFICADO

       //PARA MOSTRAR Y DECODIFICAR EL CODIGO DE CONTENIDO Y NOS MUESTRA LA IMAGEN NO CODIFICADA
       echo "<img src='data:imge/png; base64,".base64_encode($contenido)."'>";


    ?>

    <div>

    </div>
</body>
</html>
