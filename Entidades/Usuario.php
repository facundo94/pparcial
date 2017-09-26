<?php
/*nombre, email, perfil (“admin” o “user”), edad y clave*/

include "Comentario.php";

class Usuario{

    private $_nombre;
    private $_email;
    private $_perfil;
    private $_edad;
    private $_clave;

    function Usuario($nombre, $email, $perfil, $edad, $clave){
        $this->_nombre = $nombre;
        $this->_email = $email;
        $this->_perfil = $perfil;
        $this->_edad = $edad;
        $this->_clave = $clave;
    }

    function getNombre(){
        return $this->_nombre;
    }

    function getEmail(){
        return $this->_email;
    }

    function getPerfil(){
        return $this->_perfil;
    }

    function getEdad(){
        return $this->_edad;
    }

    function getClave(){
        return $this->_clave;
    }

    function ToString(){
        $retorno = $this->getNombre()."/";
        $retorno .= $this->getEmail()."/";
        $retorno .= $this->getPerfil()."/";
        $retorno .= $this->getEdad()."/";
        $retorno .= $this->getClave();

        return $retorno;
    }

    static function LeerArchivo($mail, $clave){
        $path = "usuarios.txt";
        
        $file = fopen($path, "r");
        while(!feof($file))
        {
            $linea = trim(fgets($file)); 
                
            $usuarioString = explode("/",$linea);
        
            //var_dump($usuarioString);
        
            if($usuarioString[1] == $mail){
                if($usuarioString[4] == $clave){
                    echo "Bienvenido\n";
                }else{
                    echo "La clave es incorrecta!\n";
                }
                break;
            }else if(feof($file)){
                echo "El usuario no existe!\n";
            }
        }
        fclose($file);
    }
    
    static function cargarComentario($mail, $titulo, $comentario, $pathComent){
        $path = "usuarios.txt";
        
        $file = fopen($path, "r");
        while(!feof($file))
        {
            $linea = trim(fgets($file)); 
                
            $usuarioString = explode("/",$linea);
        
            if($usuarioString[1] == $mail){
                if($archivo = fopen($pathComent, "a"))
                {
                    fwrite($archivo, $mail."/".$titulo."/".$comentario."\r\n");
                }
                break;
            }else if(feof($file)){
                echo "El usuario no existe";
            }
        }
        fclose($file);
    }

    static function cargarComentarioConFoto($mail, $titulo, $comentario, $pathComent, $foto){
        $path = "usuarios.txt";
        
        $file = fopen($path, "r");
        while(!feof($file))
        {
            $linea = trim(fgets($file)); 
                
            $usuarioString = explode("/",$linea);
        
            if($usuarioString[1] == $mail){
                if($archivo = fopen($pathComent, "a"))
                {
                    fwrite($archivo, $mail."/".$titulo."/".$comentario."\r\n");
                    Comentario::guardarConFoto($foto, $titulo);
                }
                break;
            }else if(feof($file)){
                echo "El usuario no existe";
            }
        }
        fclose($file);
    }

}


?>