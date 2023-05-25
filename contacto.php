<?php
if(isset($_POST["submit"]))
{
    $para = "181512@upslp.edu.mx";
    $asunto = "Enviando infomracion";
    $nombre = $_POST['nombre'];
    $correo = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $headers = "MIME-Version: 1.0\r\n";
    $headers = "Content-type: text/html;charset=utfs\r\n";
    $cuerpo = "Enviado por $nombre\n E-mail: $correo\n Mensaje: $mensaje\n";

    $bool = mail($para,$asunto,$correo,$headers)

}
else
{
    echo "Algo ocurrio mal...";
}