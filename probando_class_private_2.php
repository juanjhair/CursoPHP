<?php

	include("clase_probando_private3.php");
	function metodo_color($color_seleccion){
			$color=$_POST[$color_seleccion];
			if($color==$color_seleccion){
			
				echo "<p class='validado'>Monto final es :</p> ".$carro1->MontoFinal($color);
			}
			else{
				echo "<p class='no_validado'>No puedes entrar</p>";
			}
	}
		
	    $carro1=new carro();
		carro::Descuento();
		
		if(isset($_POST["rojo"])){
			//metodo_color("rojo");
			$color=$_POST["rojo"];
			if($color=="Rojo"){
			
				echo "<p class='validado'>Monto final es :</p> ".$carro1->MontoFinal($color);
			}
			else{
				echo "<p class='no_validado'>No puedes entrar</p>";
			}
		}
		/*else if(isset($_POST["azul"])){
			metodo_color("azul");
		}
		else  if(isset($_POST["marron"])){
			 metodo_color("marron");
		}
		else  if(isset($_POST["verde"])){
			 metodo_color("verde");
		}*/
		
		//echo "La fecha es : ".date("m-d-y");
		//echo "Monto final: ".$carro1->MontoFinal("naranja");
			
		
	
	
?>


		
	
	