<?php
/*5- (2pt.) TablaComentarios.php, puede recibir datos del comentario como el usuario, el titulo o nada(trae todo) 
para hacer una busqueda, y retornará una tabla con: (la imagen del comentario, el titulo , la edad del usuario 
y el nombre */

include "Entidades/Usuario.php";

$usuario = $_POST["usuario"];
$titulo = $_POST["titulo"];

?>
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
echo "<table class='table'>
        <thead>
            <tr>
                <th>  User </th>
                <th>  Titulo     </th>
                <th>  Foto       </th>
            </tr> 
            <tr>
                <td>".$usuario."</td>
                <td>".$titulo."</td>
                <td><img src='img/"."imagenCielo.png"."' width='100px' height='100px'/></td>
            </tr>
        </thead>
    </table>";		
?>
</body>
</html>