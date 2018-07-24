<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Blog Píldoras</title>
</head>
<body>
  <?php

    include_once("../modelo/Objeto_blog.php");
    include_once("../modelo/Manejo_Objetos.php");

    try {

        $miconexion=new PDO('mysql:host=localhost; dbname=bbddblog','root','root');
        $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if($_FILES['imagen']['error']){ // ['imagen']=type text de imagen

            switch($_FILES['imagen']['error']){
                case 1:  // Error exceso de tamaño de archivo en php.ini
                    echo " El tamaño de archivo excede al permitido por el servidor";
                    break;
                case 2:  // Error tamaño archivo marcado desde formulario
                    echo "El tamaño del archivo excede 2MB";
                    break;
                case 3: // corrupcion de archivo
                    echo "El envio de archivo se interumpio";
                    break;
                case 4:
                    echo "No se ha enviado ningun archivo";
                    break;
            }

        }
        else{
          echo "Entrada subida correctamente <br>";

          if((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error']==UPLOAD_ERR_OK))){

            $destino_de_ruta="../imagenes/";

            move_uploaded_file($_FILES['imagen']['tmp_name'],$destino_de_ruta.$_FILES['imagen']['name']);

            echo "El archivo ". $_FILES['imagen']['name']."  Se ha copiado en el directorio de imagenes <br>";
          }
          else{

            echo "El archivo no se ha podido copiar al directorio de imagenes";
          }
        }

        $Manejo_Objetos= new Manejo_Objetos($miconexion);

        $blog=new Objeto_blog();

        $blog->set_Titulo(htmlentities(addslashes($_POST["campo_titulo"]),ENT_QUOTES)); // para evitar inyeccion
        $lafecha=date("Y-m-d H:i:s");
        $blog->set_Fecha($lafecha);
        $blog->set_Comentario(htmlentities(addslashes($_POST["area_comentarios"]),ENT_QUOTES));
        $blog->set_Imagen($_FILES["imagen"]["name"]);

        $Manejo_Objetos->insertaContenido($blog);

        echo "<br> Entrada de blog agregada con exito <br>";



    } catch (Exception $e) {

        die("Error : ".$e->getMessage());
    }

  ?>

  <a href="../vista/Formulario.php">Añadir nueva entrada</a>
  <a href="../vista/Mostrar_blog.php">Mostrar blog</a>

</body>
</html>
