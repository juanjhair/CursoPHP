<?php

	class ConexionDB_Clases_PDO_conexion{

		protected $conexion_db;

		public function ConexionDB_Clases_PDO_conexion(){

			try {
				$this->conexion_db=new PDO('mysql:host=localhost; dbname=curso_php_prueba_1','root','root');
				$this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->conexion_db->exec("SET CHARACTER SET utf8");

				return $this->conexion_db;

			} catch (\Exception $e) {
				echo "La linea de error es: ". $e->getLine();
			}

		}
	}

 ?>
