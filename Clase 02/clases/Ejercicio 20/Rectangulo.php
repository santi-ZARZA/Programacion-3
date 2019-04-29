<?php

class Rectangulo{
    
    private $_vertice1; // Punto
    private $_vertice2; // Punto
    private $_vertice3; // Punto
    private $_vertice4; // Punto
    public $area; // double
    public $ladoDos; // int
    public $ladoUno; // int
    public $perimetro; // double

    public function __construct($v1 /*Punto*/, $v3 /*Punto*/){
        
        $this->_vertice1 = new Punto($v1->GetX(),$v1->GetY());
        $this->_vertice2 = new Punto($v1->GetX(),$v3->GetY());
        $this->_vertice3 = new Punto($v3->GetX(),$v3->GetY());
        $this->_vertice4 = new Punto($v3->GetX(),$v1->GetY());

        // abs() -> Obtiene el Valor Absoluto de un Numero
        $this->ladoUno = abs($this->_vertice1->GetX() - $this->_vertice3->GetX());
        $this->ladoDos = abs($this->_vertice1->GetY() - $this->_vertice3->GetY());
        $this->area = ($this->ladoUno * $this->ladoDos);
        $this->perimetro = (($this->ladoUno * 2) + ($this->ladoDos * 2));
    }

    public function Dibujar(){
       
        $retorno = "";
       
        for($i=0; $i<$this->ladoUno;$i++)
        {   
            for($j=0;$j<$this->ladoDos;$j++)
            {
                $retorno.= "*";
            }
            $retorno.="<br/>";
        }
        return $retorno;
       
       return $retorno;
    }

    public function Mostrar()
    {
        echo "Lado Uno: ".$this->ladoUno."<br/>Lado Dos: ".$this->ladoDos."<br/>Area: ".$this->area."<br/>Perimetro: ".$this->perimetro."<br/>".$this->Dibujar();
    }
}



?>