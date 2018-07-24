<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
  table{
    align: center;
    width: 25%;
    background-color: #FFC;
    border: 2px dotted #F00;
    margin: auto;
  }
  </style>
</head>
<body>
  <?php
    if(isset($_COOKIE["idioma_seleccionado"])){//si la cookie ha sido creada
      if ($_COOKIE["idioma_seleccionado"]=="es"){
        header("location:espanish.php");
      }else if ($_COOKIE["idioma_seleccionado"]=="in"){
        header("location:english.php");
      }
    }
  ?>
  <table>
    <tr>
      <td colspan="2" align="center"><h1>Elige idioma</h1></td>
    </tr>
    <tr>
      <td align="center"><a href="creaCookie.php?idioma=es"><img src="imagenes/esp.jpg" width="90" height="60"></td></a>
      <td align="center"><a href="creaCookie.php?idioma=in"><img src="imagenes/ing.jpg" tidth="90" height="60"></td></a>
    </tr>
  </table>
</body>
</html>
