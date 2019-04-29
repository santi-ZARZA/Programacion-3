<?php

class ClaseCopia{
    
    public static function CopiaArchivo($ubicacion){
        
        $retorna = false;

        $ArchivoDestino = "../misArchivos/".date("Y_F_t_G_i_s").".txt";

        $retorna = copy($ubicacion,$ArchivoDestino);

        return $retorna;
    }
}











?>