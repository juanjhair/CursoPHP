<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Blog Píldoras</title>
</head>
<body>
  <?php
    $conexion=mysqli_connect("localhost","root","root","bbddblog");

    if(!$conexion){
      echo "L conexion ha fallado ".mysqli_error();
      exit();
    }

    $miconsulta="SELECT * FROM CONTENIDO ORDER BY FECHA";

    if($resultado=mysqli_query($conexion,$miconsulta)){

      while($registro=mysqli_fetch_assoc($resultado)){

          echo "<h3>".$registro['Titulo']."</h3>";
          echo "<h4>".$registro['Fecha']."</h4>";
          echo "<div style='wigth:400px'>".$registro['Comentario']."</div><br><br>";

          if($registro['Imagen']!=""){//si la imagen no esta vacia
            echo "<img src='imagenes/".$registro['Imagen']."' width='300px' />";
          }
          echo "<hr/>";//para uqe divida las entradas de blog
      }
    }


  ?>

</body>
</html>
