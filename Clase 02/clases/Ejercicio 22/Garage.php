<?php

class Garage
{
    private $_razonSocial;//string
    private $_precioPorHora;//double
    private $_autos;//Array de Autos


    public function __construct($razonsocial, $precioxhora = 50){
        $this->_razonSocial = $razonsocial;
        $this->_precioPorHora = $precioxhora;
        $this->_autos = array();
    }

    public function MostrarGarage(){
       echo "<br>Razon Social: $this->_razonSocial<br>Precio/Hora: $this->_precioPorHora<br>";
       foreach ($this->_autos as $value) {
            Auto::MostrarAuto($value);
       }
    }

    public function Equals($auto){
        $retorno = false;

        foreach ($this->_autos as $value) {
            if($value->Equals($auto)){
                $retorno = true;
                break;
            }
        }

        return $retorno;
    }

    public function Add($auto){
        
        if(!$this->Equals($auto)){
            array_push($this->_autos,$auto);
        }
        else {
            echo "<br>El Auto ya existe en la cochera.<br>";
        }
    }

    public function Remove($auto){
        

        if($this->Equals($auto)){
            for ($i=0; $i < count($this->_autos); $i++) { 
                if($this->Equals($auto)){
                    unset($this->_autos[$i]);
                    break;
                }
            }
        }
        else{
            echo "<br>El Auto que intenta quitar no esta en la cochera.<br>";
        }
        
    }


}


?>