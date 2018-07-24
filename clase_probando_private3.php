<?php
	class carro {
		private $precio_base;
		private static $descuento=0;
		private $precio_color;
		
		function carro(){
			
			$this->precio_base=450;
			
		}
		function MontoFinal($color){
			
			if($color="rojo"){
				$precio_color=1000;
				$monto_Final= $precio_color + $this->precio_base-self::$descuento;
			}
			else if ($color="azul"){
				$precio_color=1200;
				$monto_Final=$this->$precio_color + precio_base-self::$descuento;
			}
			else if ($color="marron"){
				$precio_color=1400;
				$monto_Final=$this->$precio_color+ precio_base-self::$descuento;
			}
			else if ($color="verde"){
				$precio_color=1600;
				$monto_Final=$this->$precio_color+ precio_base-self::$descuento;
			}
			
			return $monto_Final;
			
		}
		static function Descuento(){
			if(date("m-d-y")>"01-25-18"){
				self::$descuento=500;
			}
		}
		
	}


?>