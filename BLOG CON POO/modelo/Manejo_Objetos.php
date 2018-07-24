<?php

    include_once("Objeto_blog.php");

    class Manejo_objetos{

        private $conexion;

        public function __construct($conexion){
          $this->setConexion($conexion);
        }

        public function setConexion(PDO $conexion){

          $this->conexion=$conexion;
        }

        public function getConetenidoPorFecha(){

            $matriz=array();

            $contador=0;

            $resultado=$this->conexion->query("SELECT * FROM contenido ORDER BY FECHA");

            while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

                $blog=new Objeto_blog();

                $blog->set_id($registro["Id"]);
                $blog->set_Titulo($registro["Titulo"]);
                $blog->set_Fecha($registro["Fecha"]);
                $blog->set_Comentario($registro["Comentario"]);
                $blog->set_Imagen($registro["Imagen"]);

                $matriz[$contador]=$blog; // SE GUARDA EN MATRIZ EL PRIMER OBJETO y asi sucesivamente
                $contador++;

            }
            return $matriz;

          }
          public function insertaContenido(Objeto_blog $blog){ // VARIABLE DE TIPO Objeto_blog

            $sql="INSERT INTO contenido (Titulo, Fecha, Comentario, Imagen) values ('".$blog->get_Titulo()."',
            '".$blog->get_Fecha()."','".$blog->get_Comentario()."','".$blog->get_Imagen()."')";

            $this->conexion->exec($sql);//EJECUTA LA INSTRUCCION SQL


          }



    }



?>
