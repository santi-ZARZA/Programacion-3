<?php
 echo "<br/>"."Ejercicios Guia Clase 02 - Parte 3 - Funciones"."<br/>";
// ejercicio 15 - Hecho en Clase
/*
function CalculaPotencia(){
    $aux = 0;
    echo "<br/>"."---------";
    for ($i=1; $i <= 4 ; $i++) { 
        echo "<br/>"."Numero potenciado: $i";
        echo "<br/>"."---------";
        for ($j=1; $j <= 4; $j++) { 
            $aux = pow($i,$j);
            echo "<br/>".$aux;
        }
        echo "<br/>"."---------";
    }
}

CalculaPotencia();
*/

// ejercicio 16 - Hecho en Clase
/*
function PalabraInvertida($array)
{
    echo "<br/>".strrev($array);
}


PalabraInvertida("funcionaa");
*/

// ejercicio 17
/*
function ValidaPalabra($palabra, $max){
    $retorno = 0;
    if(strlen($palabra) <= $max){
        switch ($palabra) {
            case 'Recuperatorio':
                $retorno = 1;
                break;
            case 'Parcial':
                $retorno = 1;
                break;
            case 'Programacion':
                $retorno = 1;
                break;
            default:
                break;
        }
    }

    return $retorno;
}

if(ValidaPalabra('Programacion',9) == 1){
    echo "<br/>"."Funciono.";
}
else{
    echo "<br/>"."No funciono.";
}
*/

// ejercicio 18
/*
function EsPar($parametro){
    $retorno = FALSE;
    if ($parametro % 2 == 0) {
        $retorno = TRUE;
    }
    return $retorno;
}

function EsImpar($parametro){
    return !(EsPar($parametro));
}

echo "<br/>"."es Par: ".EsPar(2)."<br/>";
echo "<br/>"."es Impar: ".EsImpar(4)."<br/>";
echo "<br/>"."es Par: ".EsPar(3)."<br/>";
echo "<br/>"."es Impar: ".EsImpar(3)."<br/>";
*/



?>