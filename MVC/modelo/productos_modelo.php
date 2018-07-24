<?php

    class Productos_modelo{

        private $db;

        private $productos;

        public function __construct(){

            require_once("modelo/Conectar.php");

            $this->db=Conectar::conexion(); // SE GUARDA EN $DB LA CONEXION QUE ES LLAMADA ESTATICAMENTE DE LA CLASE COENCTAR A SU METODO ESTATICO

            $this->productos=array();




        }
        public function get_productos(){

            $consulta=$this->db->query("SELECT * FROM PRODUCTOS"); // array resultante de la consulta

            while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

                  $this->productos[]=$filas;// recorre las filas que tiene la consulta y los almacena en el array productos


            }
            return $this->productos;

        }



    }

?>
