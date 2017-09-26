<?php
/*3- (1pts.) AltaComentario.php: (por POST)se recive el email del usuario y el titulo del comentario y en
comentario, si el mail existe en el archivo usuario.txt guarda en el archivo Comentario.txt.*/

include "Entidades/Usuario.php";

$email = $_POST["email"];
$titulo = $_POST["titulo"];
$comentario = $_POST["comentario"];

Usuario::cargarComentario($email, $titulo, $comentario, "Comentario.txt");

?>