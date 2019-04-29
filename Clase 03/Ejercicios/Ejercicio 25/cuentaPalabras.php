<?php

echo "Ejercicio de la Guia 25 - Leer del Archivo.<br>";

class Cuenta{

    public static function LeeyCuenta(){
        $arrayPalabras = array("unaLetra" => 0, "dosLetras" => 0, "tresLetras" => 0,"cuatroLetras" => 0, "masdecuatro" => 0);;
        
        $archivo = fopen("../misArchivos/palabras.txt","r");

        if($archivo){
            echo "llego a abrirlo.";
             
            $array = fread($archivo,filesize("../misArchivos/palabras.txt"));
          
            $separado = explode(" ",$array);
            
            for ($i=0; $i < count($separado); $i++) { 
                $separado[$i] = trim($separado[$i]);
            }

            foreach ($separado as $value) {
                switch (strlen($value)) {
                    case 1:
                        $arrayPalabras["unaLetra"]++;
                        break;
                    case 2:
                        $arrayPalabras["dosLetras"]++;
                        break;
                    case 3:
                        $arrayPalabras["tresLetras"]++;
                        break;
                    case 4:
                        $arrayPalabras["cuatroLetras"]++;
                        break;
                    
                    default:
                        $arrayPalabras["masdecuatro"]++;
                        break;
                }
            }

            fclose($archivo);
        }
        else {
            echo "<br>El Archivo no fue encontrado o posible leerlo.<br>";
        }
        return $arrayPalabras;
        
    }

    public static function ArmaTabla($arrayContadores) {
        $auxReturn= '<table border="1">
                        <tr>
                            <th>Codigo</th>
                            <th>Producto</th>
                        </tr>';
        foreach ($arrayContadores as $cant => $contador) {
            $auxReturn.= "<tr>
                            <td>{.$cant.}</td>
                            <td>{.$contador.}</td>
                        </tr>";
        }
        $auxReturn.= "</table>";

        return $auxReturn;
    }

}


?>