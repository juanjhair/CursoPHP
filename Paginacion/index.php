<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
      try {
        $base=new PDO('mysql:host=localhost; dbname=curso_php_prueba_1','root','root');

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    		$base->exec("SET CHARACTER SET utf8");

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
        $sql_total="SELECT NOMBREARTÍCULO,SECCIÓN,PRECIO,PAÍSDEORIGEN FROM PRODUCTOS WHERE SECCIÓN='DEPORTES'";

        $resultado=$base->prepare($sql_total);

        $resultado->execute(array());

        $num_filas=$resultado->rowCount();//muestra las filas que tenemos en el array por la sentencia sql

        $total_paginas=ceil($num_filas/$tamano_pagina);

        echo "Numero de registros de la consulta".$num_filas."<br>";
        echo "Mostramos ".$tamano_pagina." registros por página <br>";
        echo "Mostrando la página ".$pagina." de ".$total_paginas."<br>";


        $resultado->closeCursor();

        //PARA QUE NOS MUESTRE LOS REGISTROS DE 3 EN 3
        $sql_limite="SELECT NOMBREARTÍCULO,SECCIÓN,PRECIO,PAÍSDEORIGEN FROM PRODUCTOS WHERE SECCIÓN='DEPORTES' LIMIT
        $empezar_desde,$tamano_pagina";

        $resultado=$base->prepare($sql_limite);

        $resultado->execute(array());

        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

          echo "Nombre Artículo: ".$registro['NOMBREARTÍCULO']." Seccion: ".$registro['SECCIÓN']." Precio: "
          .$registro['PRECIO']." Pais: ".$registro['PAÍSDEORIGEN'];
          echo "<br>";
        }

      } catch (Exception $e) {

        echo "Linea del error: ".$e->getLine();
      }
      //--------------------- MOSTRAR PAGINACION--------------------------------------

      for($i=1; $i<=$total_paginas; $i++){
        echo "<a href='?pagina=".$i."'>".$i."</a>  ";
      }

  ?>
</body>
</html>
