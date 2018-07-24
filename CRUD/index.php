<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>

<?php

    include("conexion.php");//llamar a la conexion
/* CONEXION USANDO PREPARE Y EXECUTE, se prepara la sentencia y luego se ejecuta.
    $sql="SELECT * FROM DATOS_USUARIOS";

    $resultados=$base->prepare($sql);

    $resultados->execute(array());
*/
      //Uso de query, para ejecutar defrente la sentencia,sin prepararla.
    $conexion=$base->query("SELECT * FROM DATOS_USUARIOS");

    $registros=$conexion->fetchAll(PDO::FETCH_OBJ);//arreglo de objetos en le cual se usará como propiedades , las columnas de la tabla de la BD*/

    if(isset($_POST["cr"])){ // en el form general
      //el Id es autoincrementable por eso no se ingresa
        $nombre=$_POST["Nom"];
        $apellido=$_POST["Ape"];
        $direccion=$_POST["Dir"];

        $sql="INSERT INTO DATOS_USUARIOS(Nombre,Apellido,Direccion) values (:nom,:ape,:dir)";

        $resultado=$base->prepare($sql);

        $resultado->execute(array(":nom"=>$nombre, ":ape"=>$apellido, ":dir"=>$direccion));

        header("location:index.php");
    }


?>

<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr>


<?php

  foreach($registros as $persona):// registros=array con todos los objetos
    //por cada objeto llamado persona que hay en el array registros,repiteme el codigo

  /*  USO DEL WHILE CON prepare() y execute()
  while($registro=$resultados->fetch(PDO::FETCH_ASSOC)):    */

  ?>
  <tr>

   <td><?php echo $persona->Id?></td>
   <td><?php echo $persona->Nombre?></td>
   <td><?php echo $persona->Apellido?></td>
   <td><?php echo $persona->Direccion?></td>

   <!-- USO DEL ARRAY ASOCIATIVO $registro, que el fetch devolvera en cada iteracion una fila de la tabla de BD.

   <td><?php// echo $registro['Id']?></td>
   <td><?php// echo $registro['Nombre']?></td>
   <td><?php //echo $registro['Apellido']?></td>
   <td><?php //echo $registro['Direccion']?></td>

   -->

   <td class="bot">
     <a href="editar.php?Id=<?php /*Para pasar valor por la URL*/ echo $persona->Id?>
     &nom=<?php echo $persona->Nombre?>
     &ape=<?php echo $persona->Apellido?>
     &dir=<?php echo $persona->Direccion?>">
     <input type='button' name='del' id='del' value='Actualizar'></a></td>
   <td class='bot'>
     <a href="Borrar.php?Id=<?php echo $persona->Id?> &nom=<?php echo $persona->Nombre?>">
     <input type='button' name='up' id='up' value='Borrar'></a></td>

 </tr>
 <?php
  endforeach;
  //endwhile; fin del while
  ?>
	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>
  </table>
</form>

<p>&nbsp;</p>
</body>
</html>
