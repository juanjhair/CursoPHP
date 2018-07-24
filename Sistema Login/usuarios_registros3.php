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
  <h1>BIENVENIDOS USUARIOS A LA PAGINA 2</h1>
  <?php
    echo "Hola: ".$_SESSION["usuario"]."<br>";
  ?>
   <p><a href="cierre.php">Cierra Sesión<a/></p>
  <p>Esto es solo informacion solo para usuarios registros</p>
  <p><a href="usuarios_registros1.php">Volver</a></p>
</body>
</html>
