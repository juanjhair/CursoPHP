<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Blog Píldoras</title>
</head>
<body>
  <?php
    include("../modelo/Manejo_Objetos.php");

    try {

          $miconexion=new PDO('mysql:host=localhost; dbname=bbddblog','root','root');
          $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $Manejo_Objetos=new Manejo_Objetos($miconexion);

          $tabla_blog=$Manejo_Objetos->getConetenidoPorFecha();

          if(empty($tabla_blog)){// SI LA TABLA ESTA VACIA
            echo "No hay entradas de blog";
          }
          else{
            foreach($tabla_blog as $valor){

                echo "<h3>".$valor->get_Titulo()."  </h3>";
                echo "<h4>".$valor->get_Fecha()."  </h4>";

                echo "<div style='width:400px'>".$valor->get_Comentario()."</div>";

                if($valor->get_Imagen()!=""){

                    echo "<img src='../imagenes/".$valor->get_Imagen()."' width='300px' height='200px' />";

                }
                echo "<hr/>"; //LINEA DIVISIORIA

            }

          }

    } catch (xception $e) {
        die("Error : ".$e->getMessage());
    }

  ?>
  <br>

  <a href="Formulario.php"> Volver a la pagina de insercion </a>

</body>
</html>
