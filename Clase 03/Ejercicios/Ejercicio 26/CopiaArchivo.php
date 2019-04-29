<?php

require_once "./ClaseCopia.php";

if(ClaseCopia::CopiaArchivo($_REQUEST["ubiarchivo"])){
    echo "Logro Copiarse exitosamente.";
}
else {
    echo "Hubo un Error.";
}

?>