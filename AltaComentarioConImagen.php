<?php
/*4- (2pts.) AltaComentarioConImagen.php: con imagen , guardando la imagen con el titulo del comentario en la
carpeta /ImagenesDeComentario*/

include "Entidades/Usuario.php";

$email = $_POST["email"];
$titulo = $_POST["titulo"];
$comentario = $_POST["comentario"];
$foto = imagecreatefrompng($_FILES["imagen"]["tmp_name"]);

Usuario::cargarComentarioConFoto($email, $titulo, $comentario, "Comentario.txt", $foto);

?>