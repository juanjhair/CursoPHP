<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

</head>
<body>
  <?php
    if(!$_COOKIE["idioma_seleccionado"]){
      header("location:pag1.html");
    }else if ($_COOKIE["idioma_seleccionado"]=="es"){
      header("location:espanish.php");
    }else if ($_COOKIE["idioma_seleccionado"]=="in"){
      header("location:english.php");
    }

  ?>
</body>
</html>
