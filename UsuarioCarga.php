<?php
/*1- (1pt.) UsuarioCarga.php: (por GET)se ingresa nombre, email, perfil (“admin” o “user”), edad y clave. Se
guardan los datos en en el archivo de texto usuarios.txt, tomando el mail como identificador .*/

include "Entidades/Usuario.php";

$nombre = $_GET["nombre"];
$email = $_GET["email"];
$perfil = $_GET["perfil"];
$edad = $_GET["edad"];
$clave = $_GET["clave"];

$path = "usuarios.txt";
if($archivo = fopen($path, "a"))
{
    fwrite($archivo, $nombre."/".$email."/".$perfil."/".$edad."/".$clave."\r\n");
}

?>