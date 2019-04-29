<?php

    abstract class FiguraGeometrica
    {
        protected $_color;
        protected $_perimetro;
        protected $_superficie;

        public function __construct(){   
        }

        protected abstract function CalcularDatos();

        public abstract function Dibujar();

        public function GetColor(){
            return $this->$color;
        }

        public function SetColor($color){
            $this->$color = $color;
        }

        public function ToString(){
            $retorno = $this->_color." - ".$this->_perimetro." - ".$this->_superficie; 
        
            return $retorno;
        }
    }
    

?>