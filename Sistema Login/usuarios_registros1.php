<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
      session_start();
      if(!isset($_SESSION["usuario"])){ // compueba si no esta vacio la variable superglobal
        header("location:Login.html");
      }
  ?>
  <h1>BIENVENIDOS USUARIOS</h1>
  <?php
    echo "Hola: ".$_SESSION["usuario"]."<br>";
  ?>
 <p><a href="cierre.php">Cierra Sesión<a/></p>

  <p>Esto es solo informacion solo para usuarios registros</p>

<table width="295" height="122" border="1">
    <tr>
      <td colspan="3" align="center">Zona usuarios registros</td>
    </tr>
    <tr>
      <td><a href="usuarios_registros2.php">Página 1</a></td>
      <td><a href="usuarios_registros3.php">Página 2</a></td>
      <td><a href="usuarios_registros4.php">Página 3</a></td>
    </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
