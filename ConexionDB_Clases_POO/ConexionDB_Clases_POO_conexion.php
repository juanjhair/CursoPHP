<?php

	require('ConexionDB_Clases_POO_config.php');

	class ConexionDB_Clases_POO_conexion{

		protected $conexion_db=null;

		public function ConexionDB_Clases_POO_conexion(){

			$this->conexion_db=new mysqli(DB_HOST,DB_USUARIO,DB_CONTRA,DB_NOMBRE);

			if($this->conexion_db->connect_errno){
				echo "Fallo al conectar a MySQL: ".$this->conexion_db->connect_errno;
				return ;
			}
			$this->conexion_db->set_charset(DB_CHARSET);
		}
	}

 ?>
