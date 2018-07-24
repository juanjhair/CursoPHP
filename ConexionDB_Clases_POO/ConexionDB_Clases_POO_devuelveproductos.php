<?php

	require('ConexionDB_Clases_POO_conexion.php');

	class ConexionDB_Clases_POO_devuelveproductos extends ConexionDB_Clases_POO_conexion{

		public function ConexionDB_Clases_POO_devuelveproductos(){

				parent::__construct();//llama al constructor de la clase padre
		}

		public function get_productos($dato){

			$resultado=$this->conexion_db->query('SELECT * FROM productos Where PAÍSDEORIGEN="'.$dato.'"');
			//$resultado=$this->conexion_db->query("SELECT * FROM productos Where PAÍSDEORIGEN='$dato'");
			$productos=$resultado->fetch_all(MYSQLI_ASSOC);

			return $productos;
		}

	}

 ?>
