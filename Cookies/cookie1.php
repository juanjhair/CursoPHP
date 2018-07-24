<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>
<?php
	setcookie("prueba","Esta es la informacion de nuestra primera cookie",time()+300,"/Curso%20PHP/Cookies/Usando_solo_cookie_en_subdirectorio/");
  // tiempo del sistema como base + 30 segundos de duracion de la cookie
  //el cuarto parametro indica el directorio en el cual si se podra visualizar ña cookie creada
?>
</body>
</html>
