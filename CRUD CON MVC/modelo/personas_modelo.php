<?php

    class Personas_modelo{

        private $db;

        private $personas;

        public function __construct(){

            require_once("modelo/Conectar.php");

            $this->db=Conectar::conexion(); // SE GUARDA EN $DB LA CONEXION QUE ES LLAMADA ESTATICAMENTE DE LA CLASE COENCTAR A SU METODO ESTATICO

            $this->personas=array();




        }
        public function get_personas(){

            require("paginacion.php");

            $consulta=$this->db->query("SELECT * FROM datos_usuarios LIMIT $empezar_desde, $total_paginas"); // array resultante de la consulta

            while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

                  $this->personas[]=$filas;// recorre las filas que tiene la consulta y los almacena en el array productos


            }
            return $this->personas;

        }



    }

?>
