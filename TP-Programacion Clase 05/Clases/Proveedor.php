<?php

require_once "BaseDatos.php";

class Proveedor{
    public $_numero;
    public $_nombre;
    public $_domicilio;
    public $_localidad;

    public function __construct($num=null, $nom, $dom, $local){
        if($num != null){$this->_numero = $num;}
        $this->_nombre = $nom;
        $this->_domicilio = $dom;
        $this->_localidad = $local;
    }

    public static function Traer($numero = null){
        $retorno = null;

        if ($numero != null) {
            $conexion = BaseDatos::Conectar();
            if ($conexion != null) {
            $consulta = "SELECT * FROM provedores WHERE Numero = {$numero}";

            $recurso = mysql_db_query(BaseDatos::$base,$consulta,$conexion);
                if ($recurso !== false) {
                    $proveedor = mysql_fetch_object($recurso);
                    //var_dump($proveedor);
                    //echo $proveedor["Numero"];
                    $aux = get_object_vars($proveedor);
                    //var_dump($aux);
                    $retorno = new Proveedor($aux["Numero"],$aux["Nombre"],$aux["Domicilio"],$aux["Localidad"]);
                }
            
            BaseDatos::Desconectar();
            }
        }

        return $retorno;
    }

    public static function TraerTodos(){
        $retorno = array();

        $conexion = BaseDatos::Conectar();
        if ($conexion != null) {
        $consulta = "SELECT * FROM provedores ";

        $recurso = mysql_db_query(BaseDatos::$base,$consulta,$conexion);
            if ($recurso !== false) {
                while($proveedor = mysql_fetch_object($recurso)){
                $aux = get_object_vars($proveedor);

                array_push($retorno,new Proveedor($aux["Numero"],$aux["Nombre"],$aux["Domicilio"],$aux["Localidad"]));
                }
                
            }
        
        BaseDatos::Desconectar();
        }

        return $retorno;
    }

}

?>
