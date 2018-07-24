<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Formulario de Busqueda PHP</title>
</head>
<body>

 <form method="POST" action="resultadosBUSQUEDA.php" name="form_busqueda">
  
  

  <fieldset>
   <legend>Formulario de Busqueda</legend>
   <label for="txt_search">Busque aquí sus productos</label>
   <input type="search" style="width: 66%;" name="txt_search" id="txt_search" placeholder="Ingrese Palabras Clave para facilitar su busqueda: Ej: Balón">
   <input type="submit" name="btn_buscar" id="btn_buscar" value="Buscar Productos">

  </fieldset>

 </form>



 
</body>
</html>

---------------------------------------

RESULTADOS DE LA BUSQUEDA:


<?php  


if (isset($_POST["btn_buscar"])) {
$busqueda=$_POST["txt_search"]; // Almacena en una variable la busqueda ingresada por el usuario


$db_host="localhost";
	$db_name="curso_php_prueba_1";
	$db_user="root";
	$db_pass="root";

$conexion=mysqli_connect($db_host,$db_user,$db_pass);

if (mysqli_connect_errno()) {

 echo "Fallo al conectar con la BBDD.";

exit(); // Sale del condicional siempre y cuando se ejecute la funcion
}


mysqli_select_db($conexion, $db_name) or die ("No se encuentra la BBDD.");

mysqli_set_charset($conexion, "utf8");

// Se realiza una consulta a la base de datos para rescatar la información.

$consulta= " SELECT * FROM PRODUCTOS WHERE NOMBREARTICULO LIKE '%$busqueda%'";

/* Ejecutamos la consulta y la almacenados en una variable, con la función mysqli_query que recibe dos parametros, el primero es la conexión a la BD y el segundo la consulta de selección */



$resultado= mysqli_query($conexion,$consulta);

/* Al ejecutar esta consulta mysqli_query, se crea en la memoria del ordenador una tabla virtual, que almacena los TODOS los datos de la consulta SELECT, por ende ahora tenemos 2 cosas en memoria, una conexión abierta a la bbdd y el Recordset o tabla virtual.*/

// Comparas que no se envié el campo search vacío


if ($_POST["txt_search"]=="") {
 echo "Por favor no dejes el campo vacíos";
 exit();
}




echo "<table align='center' border='2px'>
<thead>
 <tr>
  <th>CÓDIGO</th>
  <th>SECCIÓN</th>

  <th>NOMBRE DEL ARTÍCULO</th>
  <th>PRECIO</th>

  <th>FECHA</th>
  <th>¿IMPORTADO?</th>

  <th>PAÍS DE ORÍGEN</th>
 </tr> </thead>
 ";

 if($filas=mysqli_fetch_array($resultado, MYSQL_ASSOC)){
  while ($filas=mysqli_fetch_array($resultado, MYSQL_ASSOC)) { // Mientras que haya datos en la tabla virtual o result_set se ejecuta la funcion, mysql_fetch_array y MYSQL_ASSOC trabaja con nombres asociativos

 echo "<tbody align='center'>
 <tr>
  <td> $filas[CODART] </td>
  <td> $filas[SECCION] </td>
  <td> $filas[NOMBREARTICULO] </td>
  <td> $filas[PRECIO] </td>
  <td> $filas[FECHA] </td>
  <td> $filas[IMPORTADO] </td>
  <td> $filas[PAISDEORIGEN] </td>
 </tr> </tbody>

 ";



}

}else{

 echo "NO EXISTE ESE ARTÍCULO EN LA BBDD.";
}

}

echo "</table>";

 mysqli_free_result($resultado);

mysqli_close($conexion); // Cerramos la conexión


?>﻿