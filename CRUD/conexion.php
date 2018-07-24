<?php

  try {

      $base=new PDO('mysql:host=localhost; dbname=curso_php_prueba_1','root','root');

      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  		$base->exec("SET CHARACTER SET utf8");

  } catch (Exception $e) {
      die('Error'.$e->getMessage());
      echo "Line de error ".$e->getLine();
  }

?>
