<?php
//---------------------PAGINACION-------------------------------------
   require_once("Conectar.php");
   $base=Conectar::conexion();

    $tamano_pagina=3;//cuantos registros por paginas
    if(isset($_GET["pagina"])){ // si ha hecho click en el indice de la paginacion
        if($_GET["pagina"]==1){
          header("location:index.php");
        }else{
          $pagina=$_GET["pagina"];
        }
    }else{
        $pagina=1;//indica la pagina en la que estamos actualmente
    }

    $empezar_desde=($pagina-1)*$tamano_pagina; // empieza en 0

    //SENTENCIA QUE UNICAMENTE PARA SABER CUANTOS REGISTROS NOS DEVOLERA LA CONSULTA
    $sql_total="SELECT Id,Nombre,Apellido,Direccion FROM DATOS_USUARIOS";

    $resultado=$base->prepare($sql_total);

    $resultado->execute(array());

    $num_filas=$resultado->rowCount();//muestra las filas que tenemos en el array por la sentencia sql

    $total_paginas=ceil($num_filas/$tamano_pagina);

    //--------------------------------------------------------------------------------------------

?>
