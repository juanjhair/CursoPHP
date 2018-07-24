<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

</head>

<body>

<p>&nbsp;</p>
<form name="form1" method="post" action="operadores_matematicos_part1.php">
  <p>
    <label for="num1"></label>
    <input type="text" name="num1" id="num1">
    <label for="num2"></label>
    <input type="text" name="num2" id="num2">
    <label for="operacion"></label>
    <select name="operacion" id="operacion">
      <option>Suma</option>
      <option>Resta</option>
      <option>Multiplicación</option>
      <option>División</option>
      <option>Módulo</option>
      <option>Incremento</option>
      <option>Decremento</option>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
  </p>
</form>
<p>&nbsp;</p>

<?php
	/*
		if(isset($_POST["button"]))
		{
			
			$operador1=$_POST["num1"];
			$operador2=$_POST["num2"];
			$operacion=$_POST["operacion"];
			
			if(!strcmp("Suma",$operacion))
			{
				echo "La suma es: ".($operador1+$operador2);
			}
			if(!strcmp("Resta",$operacion))
			{
				echo "La resta es: ".($operador1-$operador2);
			}
			if(!strcmp("Multiplicación",$operacion))
			{
				echo "La multiplicacion es: ".($operador1*$operador2);
			}
			if(!strcmp("División",$operacion))
			{
				echo "La division es: ".($operador1/$operador2);
			}
			if(!strcmp("Módulo",$operacion))
			{
				echo "El modulo es: ".($operador1%$operador2);
			}
			
		}*/
		
		include("operadores_matematicos_part2.php");
		if(isset($_POST["button"]))
		{
			
			$operador1=$_POST["num1"];
			$operador2=$_POST["num2"];
			$operacion=$_POST["operacion"];
			
			calcular($operacion);
		}
?>

</body>
</html>