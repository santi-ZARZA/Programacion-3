<?php

class Rectangulo extends FiguraGeometrica 
{
    private $_ladoDos;
    private $_ladoUno;

    public function __construct($i1,$i2){
        //Inicializo Constructor Padre
        parent::__construct();

        $this->_ladoUno = $i1;
        $this->_ladoDos = $i2;

        $this->CalcularDatos();
    }

    protected function CalcularDatos(){
        $this->_perimetro = ((2*$this->_ladoUno) + (2*$this->_ladoDos));
        $this->_superficie = ($this->_ladoUno * $this->_ladoDos);
    }

    public function Dibujar()
    {
        $retorno ="<div style='color:".$this->_color."'>"; //Esto es un string
        for($i=0; $i<$this->_ladoUno;$i++)
        {   
            for($j=0;$j<$this->_ladoDos;$j++)
            {
                $retorno.= "*";
            }
            $retorno.="<br/>";
        }
        $retorno.="</div>";
        return $retorno;
    }

    public function ToString()
    {
        $retorno = parent::ToString()." - ".$this->_ladoUno." - ".$this->_ladoDos; 
        $retorno.= "<br/>".$this->Dibujar();
        return $retorno;
    }

}



?>