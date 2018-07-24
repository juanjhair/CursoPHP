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
      echo "La conexion ha fallado ".mysqli_error();
      exit();
    }

    if($_FILES['imagen']['error']){ // ['imagen']=type text de imagen

        switch($_FILES['imagen']['error']){
            case 1:  // Error exceso de tamaño de archivo en php.ini
                echo " El tamaño de archivo excede al permitido por el servidor";
                break;
            case 2:  // Error tamaño archivo marcado desde formulario
                echo "El tamaño del archivo excede 2MB";
                break;
            case 3: // corrupcion de archivo
                echo "El envio de arcvhio se interumpio";
                break;
            case 4:
                echo "No se ha enviado ningun archivo";
                break;
        }

    }
    else{
      echo "Entrada subida correctamente";
      if((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error']==UPLOAD_ERR_OK))){

        $destino_de_ruta="imagenes/";

        move_uploaded_file($_FILES['imagen']['tmp_name'],$destino_de_ruta.$_FILES['imagen']['name']);

        echo "El archivo ". $_FILES['imagen']['name']." Se ha copiado en el directorio de imagenes";
      }
      else{

        echo "El archivo no se ha podido copiar al directorio de imagenes";
      }
    }
    $eltitulo=$_POST["campo_titulo"];
    $lafecha=date("Y-m-d H:i:s");
    $elcomentario=$_POST["area_comentarios"];

    $laimagen=$_FILES['imagen']['name'];

    $miconsulta="INSERT INTO contenido (Titulo, Fecha, Comentario, Imagen) values
    ('$eltitulo','$lafecha','$elcomentario','$laimagen')";

    $resultado=mysqli_query($conexion,$miconsulta);

    //cerando la conexion

    mysqli_close($conexion);

    echo "<br> Se ha agregado el comentario con exito. <br><br>";

  ?>

  <a href="Formulario.php">Añadir nueva entrada</a>
  <a href="mostrar.php">Mostrar blog</a>

</body>
</html>
