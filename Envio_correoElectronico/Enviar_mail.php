<? php


    if($_POST["nombre"]=="" || $_POST["apellido"]=="" $_POST["email"]=="" $_POST["nombre"]=="" ){

        echo "ha habiado un error . Revisa los campos";

        die();
    }
    $texto_mail=$_POST["comentarios"];
    $destinatario=$_POST["email"];
    $asunto=$_POST["asunto"];
    $headers="MIME-Version:1.0\r\n"; // BUSCAR EN WIKIPEDIA
    $headers.="Content-type: text/html; charset=iso-8859-1\r\n"; // EL " .= " SIRVE PARA CONCATENAR LA VARIBLE CON OTRA COSA
    $headers.="From: Pruebas Juan < cursos@pildorasinformaticas.es>\r\n";

    $exito=mail($destinatario,$asunto,$texto_mail,$headers);

    if($exito){
        echo "MENSAJE ENVIADO CON EXITO";
    }else{
        echo "HA HABIDO UN ERROR";
    }



?>
