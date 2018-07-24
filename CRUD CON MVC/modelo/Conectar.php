<?php

  class Conectar{

    public static function conexion(){ // el metodo static es para llamarlo sin la necesidad de instarciar un objeto
      try {

          $conexion=new PDO('mysql:host=localhost; dbname=curso_php_prueba_1','root','root');

          $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $conexion->exec("SET CHARACTER SET utf8");

      } catch (Exception $e) {
          die('Error'.$e->getMessage());
          echo "Line de error ".$e->getLine();
      }

      return $conexion;

    }
  }
?>
