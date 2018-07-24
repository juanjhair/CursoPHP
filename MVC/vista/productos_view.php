<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>

    td{
      border:1px dotted #FF0000;
    }
</style>
</head>

<body>

  <table>
    <tr>
      <td>NOMBRE DEL ARTÍCULO</td>
    </tr>

  <?php

      foreach($matrizProductos as $registro){

        echo  "<tr><td>".$registro["NOMBREARTÍCULO"]."</td></tr>";
      }

  ?>

  </table>

</body>
</html>
