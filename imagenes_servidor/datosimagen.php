<?php

      //RECIBIMOS LOS DATOS DE LA IMAGEN

    $nombre_imagen=$_FILES['imagen'] ['name'];//nombre del input type file, el segundo es propiedad , RUTA DE LA IMAGEN
    $tipo_imagen=$_FILES['imagen'] ['type'];
    $tamano_imagen=$_FILES['imagen'] ['size'];

    echo "tamaño :" . $_FILES['imagen'] ['size'];
    echo "tipo de archivo: ".$_FILES['imagen'] ['type'];

    if($tamano_imagen<=1000000) {//1 Mega = 1 millon de bytes

        if($tipo_imagen=="image/jpg" || $tipo_imagen=="image/jpeg" || $tipo_imagen=="image/gif" ){
          //$carpeta_destino=$_SERVER['DOCUMENT_ROOT'];//CON ESTO SOLO SE ESPECIFICA LA RUTA HASTA EL "www" DE LA CARPETA DLE WAMP(servidor)

          //RUTA COMPLETA DE LA CARPETA DESTINO
          $carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/intranet/uploads/';

          //MUEVE LA IMAGEN DEL DIRECTORIO TEMPORAL A LA CARPETA DESTINO.Es necesario concatenarlo con el nombre de la imagen.
          move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino . $nombre_imagen);
        }
        else{
            echo "Solo se pueden subir imagenes jpg/jpeg/gif";
        }
    }
    else{

      echo "El tamaño es demasiado grande";
    }
    require("datos_conexion.php");

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

  	if(mysqli_connect_errno())
  	{
  		echo "Fallo al conectar con la BBDD";
  		exit();
  	}
  	 mysqli_set_charset($conexion,"utf8"); // uso de caracteres latinos.

  	 mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la base de datos"); // quitando el nombre del connect , se puede escoger la base de datos con esta funcion. "or die" es para decir si no la escoge o no existe .


    $sql="UPDATE PRODUCTOS SET FOTO ='$nombre_imagen' WHERE CÓDIGOARTÍCULO='AR01'";
  	$resultados=mysqli_query($conexion,$sql);


















?>
