<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    h1,h2{
      text-align: center;
    }
    table{
      width: 25%;
      background-color: #FFC;
      border: 2px dotted #F00;
      margin: auto;
    }
    .izq{
      text-align: right;
    }
    .der{
      text-align: left;
    }
    td{
      text-align: center;
      padding: 10px;
    }

  </style>
</head>
<body>
  <?php
    if(isset($_POST["enviar"])){
      try {
        $base=new PDO("mysql:host=localhost; dbname=curso_php_prueba_1","root","root");

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql="SELECT * FROM USUARIOS_PASS WHERE USUARIOS=:login AND PASSWORD=:password";

        $resultado=$base->prepare($sql);

        $login=htmlentities(addslashes($_POST["login"])); // PARA SEGURIDAD ANTE INYECCION
        $password=htmlentities(addslashes($_POST["password"]));

        $resultado->bindValue(":login",$login);
        $resultado->bindValue(":password",$password);
        $resultado->execute();

        $numero_registro=$resultado->rowCount();
        if($numero_registro!=0){

          session_start();

          $_SESSION["usuario"]=$_POST["login"];//guarda en la superglobal lo que entra en login

          //header("location:usuarios_registros1.php");
        }else{
          //header("location:login.html");
          echo "Error. Usuario o contraseña incorrectos<br>";
        }

      } catch (Exception $e) {
        die("Error: ".$e->getMessage());
      }
    }
  ?>
  <?php
  if(!isset($_SESSION["usuario"])){// si no se ha iniciado sesion
      include("formulario.html");
  }else{
    echo "Usuario: ".$_SESSION["usuario"];
  }


   ?>

  <h2 >CONTENIDO DE LA WEB</h2>
  <table>
    <tr>
      <td><img src="imagenes/1.jpg" width="300" height="166"></td>
      <td><img src="imagenes/2.jpg" width="300" height="171"></td>
    </tr>
    <tr>
      <td><img src="imagenes/3.jpg" width="300" height="166"></td>
      <td><img src="imagenes/4.jpg" width="300" height="197"></td>
    </tr>
  </table>
</body>
</html>
