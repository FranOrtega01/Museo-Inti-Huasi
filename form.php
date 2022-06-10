<?php

$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"]; 

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n\r\n";
$mensaje .= . $telefono . ",\r\n\r\n";
$mensaje .= . $email . ",\r\n\r\n";
$mensaje .= "Mensaje: " . $_POST["mensaje"] . ",\r\n\r\n";
$mensaje .= "Enviado el " . date("d/m/Y", time());

$para = "franortega.wg@gmail.com";
$asunto = "Mail desde Museo Inti Huasi";

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:exito.html");

?>