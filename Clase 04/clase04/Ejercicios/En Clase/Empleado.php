<?php

class Empleado{
    public $nombre;
    public $apellido;
    public $sexo;
    public $legajo;
    public $sueldo;
    public $path_info;


    public function __construct($nom,$ape,$sexo,$leg,$suel,$path){
        $this->nombre = $nom;
        $this->apellido = $ape;
        $this->sexo = $sexo;
        $this->legajo = $leg;
        $this->sueldo = $suel;
        $this->path_info = $path;

    }

    public function ToString(){
        return $this->legajo."-".$this->apellido."-".$this->nombre."-".$this->sexo."-".$this->sueldo."-".$this->path_info;
    }

    public static function Agregar($empleado){
        
        $archivo = fopen("./archivos/empleados.txt","a");
        fwrite($archivo,$empleado->ToString()."\r\n");
        fclose($archivo);
    }

    public static function TraerTodos(){
        $retorno = array();

        $archivo = fopen("archivos/empleados.txt","r");
        if ($archivo) {
            while (!feof($archivo)) {
                $auxrecu = fgets($archivo);
                if($auxrecu != "" && $auxrecu != " "){
                    $auxarray = explode("-",$auxrecu);

                    array_push($retorno,new Empleado($auxarray[2],$auxarray[1],$auxarray[3],$auxarray[0],$auxarray[4],trim($auxarray[5])));
                }
            }

            fclose($archivo);
        }

        return $retorno;
    }
}
