
<?php

      require_once("modelo/productos_modelo.php");

      $producto= new Productos_modelo();// al instancia se llama automaticamente al construcctor

      $matrizProductos=$producto->get_productos();//devuelve un array con los productos

      require_once("vista/productos_view.php");
?>
