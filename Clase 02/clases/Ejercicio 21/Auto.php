<?php

class Auto {
    private $_color;//string
    private $_precio;//double
    private $_marca;//string
    private $_fecha;//datetime

    function __construct($marca, $color, $precio = 250, $fecha = "0/00/0000"){
        
        $this->_marca = $marca;
        $this->_color = $color;
        if($precio != null){$this->_precio = $precio;}
        if($fecha != null){$this->_fecha = $fecha;}
    }

    function AgregarImpuestos($double){
        $this->_precio += $double;
    }

    public static function MostrarAuto($Auto){
        echo "<br>"."Caracteristicas del Auto:<br>Marca: $Auto->_marca<br>Color: $Auto->_color<br>Fecha: $Auto->_fecha<br>Precio: $Auto->_precio<br>";
    }

    public function Equals($Auto){
        $retorno = false;

        if($Auto->_marca == $this->_marca){
            $retorno = true;
        }

        return $retorno;
    }

    public static function Add($Auto1, $Auto2){
        $retorno = 0;

        if ($Auto1->Equals($Auto2) && $Auto1->_color == $Auto2->_color) {
            $retorno = ($Auto1->_precio + $Auto2->_precio);
        }
        else {
            echo "Los dos autos no son iguales."."<br>";
        }
        return $retorno;
    }
}

?>