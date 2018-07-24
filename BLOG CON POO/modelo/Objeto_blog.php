<?php

    class Objeto_blog{

        private $id;
        private $Titulo;
        private $Fecha;
        private $Comentario;
        private $Imagen;

        //METODOS DE ACCESO A LAS PROPIEDADES
        public function get_id(){
            return $this->id;
        }
        public function set_id($id){
            $this->id=$id;
        }
        public function get_Titulo(){
            return $this->Titulo;
        }
        public function set_Titulo($Titulo){
            $this->Titulo=$Titulo;
        }
        public function get_Fecha(){
            return $this->Fecha;
        }
        public function set_Fecha($Fecha){
            $this->Fecha=$Fecha;
        }
        public function get_Comentario(){
            return $this->Comentario;
        }
        public function set_Comentario($Comentario){
            $this->Comentario=$Comentario;
        }
        public function get_Imagen(){
            return $this->Imagen;
        }
        public function set_Imagen($Imagen){
            $this->Imagen=$Imagen;
        }



    }


?>
