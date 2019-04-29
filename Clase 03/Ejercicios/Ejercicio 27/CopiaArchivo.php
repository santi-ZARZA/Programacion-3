<?php

require_once "./ClaseCopia.php";

if(ClaseCopia::InvierteArchivo($_REQUEST["ubiarchivo"])){
    echo "Se invirtio el Archivo.<br><br>";
}


ClaseCopia::LeeArchivoInvertido();


?>