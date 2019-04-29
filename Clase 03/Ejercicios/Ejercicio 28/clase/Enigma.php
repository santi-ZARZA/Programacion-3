<?php

class Enigma{
    
    public static function Encriptar($mensaje, $path){
        $retorno = false;

        $archivo = fopen($path,"a");

        if($archivo){
            //$encriptado = array();

            for ($i=0; $i < strlen($mensaje); $i++) { 
                
                if(fwrite($archivo,(ord($mensaje[$i]) + 200)." ")){
                    $retorno = true;
                }
            }

            fclose($archivo);
        }

        return $retorno;
    }

    public static function Desencriptar($path){
        $auxReturn = ""; //Variable de retorno
        $file = fopen($path, "r+"); //Apertura del archivo
        $arrayAcsii = array(); //Variable auxiliar
        $auxLinea = fread($file, filesize($path)); //Variable auxiliar con el contenido del archivo
        $arrayLetras = explode(" ",$auxLinea); //Variable auxiliar con el contenido dividido en un array para manejar los codigos acsii con mejor precisión
        foreach ($arrayLetras as $numLetra) {
            //Recorre el array para eliminar los caracteres no convencionales
            $numLetra = trim($numLetra);
            //Y si el trim no es vacio...
            if($numLetra != "") {
                array_push($arrayAcsii, ((int)$numLetra)); //Lo convierte en un acsii para agregarlo a la lista de acsii del mensaje
            }
        }
        foreach ($arrayAcsii as $numeroAcsii) {
            //Recorre el array de acsiis para convertir cada codigo en un caracter y eliminar la enfritacion, luego agregandolo al mensaje de retorno
            $auxReturn.=chr($numeroAcsii-200);
        }
        fclose($file);
        return $auxReturn;
    }
}






?>