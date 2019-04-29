<?php

class ClaseCopia{
    
    public static function InvierteArchivo($ubicacion){
        
        $retorna = false;

        $ArchivoDestino = "../misArchivos/archivoInvertido.txt";

        $acopiar = fopen($ubicacion,"r");

        if($acopiar){
            
            $ainvertir = fopen($ArchivoDestino,"a");
            if($ainvertir){
                $aux = fread($acopiar,filesize($_REQUEST["ubiarchivo"]));
                if(fwrite($ainvertir,strrev($aux))){
                    $retorna = true;
                }

                fclose($ainvertir);
            }
            else {
                echo "nop no funciono";
            }
            fclose($acopiar);
        }
        else {
            echo "no Funciono.";
        }



        return $retorna;
    }

    public static function LeeArchivoInvertido()
    {
        $archivo = fopen("../misArchivos/archivoInvertido.txt","r");
        if($archivo){
            $aux = fread($archivo,filesize("../misArchivos/archivoInvertido.txt"));
            echo "Al reves: ".$aux."<br><br>";
            echo "Al derecho: ".strrev($aux)."<br>";


            fclose($archivo);
        }
        else {
            echo "hubo un Error.";
        }

    }

}











?>