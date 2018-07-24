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
    try {
      $base=new PDO("mysql:host=localhost; dbname=curso_php_prueba_1","root","root");

      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql="SELECT * FROM USUARIOS_PASS WHERE USUARIOS=:login AND PASSWORD=:password";

      $resultado=$base->prepare($sql);

      $login=htmlentities(addslashes($_POST["login"])); // PARA SEGURIDAD ANTE INYECCION
      $password=htmlentities(addslashes($_POST["password"]));
/*
      $login=addslashes($_POST["login"]);
      $password=addslashes($_POST["password"]);
*/
    /*  $login=htmlentities($_POST["login"]);
      $password=htmlentities($_POST["password"]);
*/
      $resultado->bindValue(":login",$login);
      $resultado->bindValue(":password",$password);
      $resultado->execute();

      $numero_registro=$resultado->rowCount();
      if($numero_registro!=0){
        session_start();
        $_SESSION["usuario"]=$_POST["login"];//guarda en la superglobal lo que entra en login
        header("location:usuarios_registros1.php");
      }else{
        header("location:login.html");
      }

    } catch (Exception $e) {
      die("Error: ".$e->getMessage());
    }

  ?>
</body>
</html>
