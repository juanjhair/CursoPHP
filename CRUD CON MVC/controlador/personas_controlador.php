
<?php

      require_once("modelo/personas_modelo.php");


      $persona= new Personas_modelo();// al instancia se llama automaticamente al construcctor

      $matrizPersonas=$persona->get_personas();//devuelve un array con los productos


      require_once("vista/personas_view.php");
?>
