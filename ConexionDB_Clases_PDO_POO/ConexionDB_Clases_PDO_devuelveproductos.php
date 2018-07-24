<?php

	require('ConexionDB_Clases_PDO_conexion.php');

	class ConexionDB_Clases_PDO_devuelveproductos extends ConexionDB_Clases_PDO_conexion{

		public function ConexionDB_Clases_POO_devuelveproductos(){

				parent::__construct();//llama al constructor de la clase padre
		}

		public function get_productos($dato){

			$sql="SELECT * FROM productos Where PAÍSDEORIGEN='".$dato."'";

			$sentencia=$this->conexion_db->prepare($sql);
      $sentencia->execute(array());

      $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);

      $sentencia->closeCursor();

			return $resultado;

      $this->conexion_db=null;
		}

	}

 ?>
