<?php

class Administra{

    public static function Ingresar(){
        $archivo = fopen("Archivos/fotos.txt","a");
        $ruta = $_FILES["foto"]["name"];
        $destino = "Archivos/Fotos/".$ruta;

        if ($archivo) {
            fwrite($archivo,$ruta." \r\n");
            move_uploaded_file($_FILES["foto"]["tmp_name"],$destino);
            fclose($archivo);
        }
    }

    public static function Mostrar(){
        $archivo = fopen("Archivos/fotos.txt","r");
        if($archivo){
            $leido = trim(fread($archivo,filesize("Archivos/fotos.txt")));
            $array = explode(" ",$leido);
            //var_dump($array);
            $tabla = '<table border="3" align="center"><tr>';
            $cont = 0;
            foreach ($array as $value) {
                if($cont == 3){
                    $tabla .= '</tr>';
                    $cont = 0;
                }
                else {
                    $tabla .= '<td align="center"><a href="mostraroriginal.php?imagen=./Archivos/Fotos/'.$value.'"><img src="Archivos/Fotos/'.$value.'" height="100px" width="100px"/></a></td>'; 
                    $cont++;
                }
            }
            $tabla.='<br/><br/><a href="index.html">Volver al menu de carga</a></table>';

            echo $tabla;

            fclose($archivo);
        }
    }

}
