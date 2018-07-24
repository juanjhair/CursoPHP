<style>

	.respuestaColor{
		font-size:36px;
		color:#3F6;
		font-weight:bold;
	}
</style>



<?php


			function calcular($operacion){
					global $operador1;
					global $operador2;
					if(!strcmp("Suma",$operacion))
					{
						echo "<p class='respuestaColor'>La suma es: ".($operador1+$operador2)."</p>";
					}
					if(!strcmp("Resta",$operacion))
					{
						echo "<p class='respuestaColor'>La resta es: ".($operador1-$operador2)."</p>";
					}
					if(!strcmp("Multiplicación",$operacion))
					{
						echo "<p class='respuestaColor'>La multiplicacion es: ".($operador1*$operador2)."</p>";
					}
					if(!strcmp("División",$operacion))
					{
						echo "<p class='respuestaColor'>La division es: ".($operador1/$operador2)."</p>";
					}
					if(!strcmp("Módulo",$operacion))
					{
						echo "<p class='respuestaColor'>El modulo es: ".($operador1%$operador2)."</p>";
					}
					if(!strcmp("Incremento",$operacion))
					{
						$valor1=$operador1;
						$valor2=$operador2;
						$operador1++;
						$operador2++;
						echo "El numero ".$valor1." incrementado es: ".$operador1."<br>";
						echo "El numero  ".$valor2." incrementado es: ".$operador2;
					}
					if(!strcmp("Decremento",$operacion))
					{
						$operador1--;
						$operador2--;
						echo "El numero 1 decrementado es: ".$operador1."<br>";
						echo "El numero 2 decrementado es: ".$operador2;
					}

			//calcular($operacion);


		}
?>
