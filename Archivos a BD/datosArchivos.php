<?php

      //RECIBIMOS LOS DATOS DE LA IMAGEN

    $nombre_archivo=$_FILES['archivo'] ['name'];//nombre del input type file, el segundo es propiedad , RUTA DE LA IMAGEN
    $tipo_archivo=$_FILES['archivo'] ['type'];
    $tamano_archivo=$_FILES['archivo'] ['size'];

    echo "tamaño :" . $_FILES['archivo'] ['size'];
    echo "tipo de archivo: ".$_FILES['archivo'] ['type'];

    if($tamano_archivo<=100000000) {//1 Mega = 1 millon de bytes

          //$carpeta_destino=$_SERVER['DOCUMENT_ROOT'];//CON ESTO SOLO SE ESPECIFICA LA RUTA HASTA EL "www" DE LA CARPETA DLE WAMP(servidor)

          //RUTA COMPLETA DE LA CARPETA DESTINO
          $carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/intranet/uploads/';

          //MUEVE LA IMAGEN DEL DIRECTORIO TEMPORAL A LA CARPETA DESTINO.Es necesario concatenarlo con el nombre de la imagen.
          move_uploaded_file($_FILES['archivo']['tmp_name'],$carpeta_destino . $nombre_archivo);
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

     mysqli_select_db($conexion,$db_nombre) or die ("No se encuentra la base de datos"); 
     // quitando el nombre del connect , se puede escoger la base de datos con esta funcion.
     // "or die" es para decir si no la escoge o no existe .

     $archivo_objetivo=fopen($carpeta_destino.$nombre_archivo , "r"); // "r" PERMISO DE SOLO LECTURA

    $contenido=fread($archivo_objetivo,$tamano_archivo);// LEE LOS Bytes que contiene ese archivo

    $contenido=addslashes($contenido);
    fclose($archivo_objetivo); // hay que cerrarlo porque el "fopen" es un flujo

    //$sql="UPDATE PRODUCTOS SET FOTO ='$nombre_imagen' WHERE CÓDIGOARTÍCULO='AR01'";
    $sql="INSERT INTO archivos (Id, Nombre, Tipo, Contenido) values (0,'$nombre_archivo','$tipo_archivo','$contenido')";

    $resultados=mysqli_query($conexion,$sql);

    if(mysqli_affected_rows($conexion)>0){
      echo "SE HA INSERTADO CON EXITO EL REGISTRO";
    }else{
      echo"NO SE HA PODIDO INSERTAR EL REGISTRO";
    }


















?>
