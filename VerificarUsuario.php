<?php
/*2- (1pts.) VerificarUsuario.php: (por POST)Se ingresa email y clave, si coincide con algún registro del archivo
usuarios.txt retornar “Bienvenido”. De lo contrario informar si el usuario existe o si es error de clave.*/

include "Entidades/Usuario.php";

$mail = $_POST["email"];
$clave = $_POST["clave"];

Usuario::leerArchivo($mail, $clave);

?>