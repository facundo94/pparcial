<?php

class Comentario{

    static function guardarConFoto($foto, $titulo){
        imagepng($foto , "img/$titulo.png");
    }

    static function getTablaComentarios(){
      echo " <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
        </head>
        <body>";
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
        echo "</body>
        </html>;
    }

}

?>