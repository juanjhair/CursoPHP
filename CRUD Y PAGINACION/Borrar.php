<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>
  <?php
    include("conexion.php");

    $Id=$_GET["Id"];
    $base->query("DELETE FROM DATOS_USUARIOS WHERE Id='$Id'");

    header("location:index.php");
  ?>
</body>
</html>
