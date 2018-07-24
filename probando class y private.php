<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#3F0;
		padding:5px;
		border:#30F 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>
</head>

<body>
<h1 style="color:#FF0000";> Seleccione un color: </h1>
	
<form action="probando_class_private_2.php" method="post" name="datos_usuario" id="datos_usuario">
  <table width="56%" align="center">
    <tr>
      <td colspan="1" align="center"><input type="submit" name="ojo" id="tojo" value="Rojo"></td>
      <td colspan="1" align="center"><input type="submit" name="azul" id="azul" value="Azul"></td>
      <td colspan="1" align="center"><input type="submit" name="marron" id="marron" value="Marron"></td>
      <td colspan="1" align="center"><input type="submit" name="verde" id="verde" value="Verde"></td>
    </tr>
  </table>
</form>





</body>
</html>