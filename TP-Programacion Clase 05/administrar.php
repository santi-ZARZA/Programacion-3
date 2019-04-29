<?php

require_once "Clases/BaseDatos.php";
require_once "Clases/Producto.php";
require_once "Clases/Envio.php";
require_once "Clases/Proveedor.php";

/*
var_dump(Proveedor::TraerTodos());

echo "<br/>---------------------------------------------------------<br/>";

var_dump(Producto::TraerTodos());

echo "<br/>---------------------------------------------------------<br/>";

var_dump(Envio::TraerTodos());

echo "<br/>---------------------------------------------------------<br/>";

$aux_proveedor = Proveedor::Traer(100);
echo "numero:{$aux_proveedor->_numero}<br/>nombre:{$aux_proveedor->_nombre}<br/>domicilio:{$aux_proveedor->_domicilio}<br/>localidad:{$aux_proveedor->_localidad}";

echo "<br/>---------------------------------------------------------<br/>";

$aux_producto = Producto::Traer(1);
echo "pnumero:{$aux_producto->_pNumero}<br/>pnombre:{$aux_producto->_pNombre}<br/>precio:{$aux_producto->_precio}<br/>tamaño:{$aux_producto->_tamano}";
*/

switch ($_REQUEST["accion"]) {
    case 1:
    $productos = Producto::TraerTodos();
    if(asort($productos)){
        $ordenado = "";
        foreach ($productos as $value) {
            $ordenado .= "<tr>";
            $ordenado .= "pNumero:{$value->_pNumero}--Nombre:{$value->_pNombre}--Precio:{$value->_precio}--Tamaño:{$value->_tamano}<br/>";
            $ordenado .= "</tr>";
        }
        echo $ordenado;
    }
    else{
        echo "no se pudo mostrar los productos ordenados.<br/>";
    }
        break;
    case 2:
    $proveedores = Proveedor::TraerTodos();
    if(count($proveedores) > 0){
        $mostrar = "";
        foreach ($proveedores as $value) {
            if(strcmp(trim($value->_localidad),"Quilmes")== 0){
                $mostrar .= "<tr>";
                $mostrar .= "Numero:{$value->_numero} || Nombre:{$value->_nombre} || Domicilio:{$value->_domicilio} || Localidad:{$value->_localidad}<br/>";
                $mostrar .= "</tr>";
            }
        }
        if($mostrar != ""){
            echo $mostrar;
        }
        else {
            echo "No hay Ningun Proveedor de Quilmes.<br/>";
        }
    }
    else {
        echo "No hay Proveedores los cuales mostrar.<br/>";
    }
        break;
    case 3:
    $envios = Envio::TraerTodos();
    if(count($envios) > 0){
        $mostrar = "";
        foreach ($envios as $value) {
            if($value->_cantidad >= 200 && $value->_cantidad <= 300){
                $mostrar .= "<tr>";
                $mostrar .= "Numero/Proveedor:{$value->_numero} || Numero/Producto:{$value->_pNumero} || Cantidad:{$value->_cantidad}<br/>";
                $mostrar .= "</tr>";
            }
        }
        if($mostrar != ""){
            echo $mostrar;
        }
        else {
            echo "<br/>No hay productos con Cantidad entre ( 200 - 300 ).<br/>";
        }
    }
    else {
        echo "<br/>No hay Envios que mostrar.<br/>";
    }    
        break;
    case 4:
    $envios = Envio::TraerTodos();
    if(count($envios) > 0){
        $mostrar = "";
        $cantidadtotal = 0;
        foreach ($envios as $value) {
            $cantidadtotal += $value->_cantidad;
        }
        $mostrar .= "La cantidad Total de todos los Envios es de : {$cantidadtotal}<br/>La cantidad de Envios es de : ".count($envios)."<br/>";
        echo $mostrar;
    }
    else {
        echo "<br/>No hay productos enviados.<br/>";
    }    
        break;
    case 5:
    $envios = Envio::TraerTodos();
    if(count($envios) > 0){
        $mostrar = "";
        $cont = 0;
        foreach ($envios as $value) {
            if($cont < 3){
                $mostrar .= "<tr>";
                $mostrar .= "|| Numero/Producto:{$value->_pNumero} ||<br/>";
                $mostrar .= "</tr>";
                $cont++;
            }
            else {
                break;
            }
        }
        echo $mostrar;

    }
    else {
        echo "No hay envios los cuales mostrar.<br/>";
    }    
        break;
    case 6:
    $envios = Envio::TraerTodos();
    if(count($envios) > 0){
        $proveedor;
        $producto;
        $mostrar = "";
        foreach ($envios as $value) {
            $proveedor = Proveedor::Traer($value->_numero);
            $producto = Producto::Traer($value->_pNumero);
            if($producto != null && $proveedor != null){
                $mostrar .= "<tr>";
                $mostrar .= "|| Nombre del Proveedor: {$proveedor->_nombre} || Nombre del Producto: {$producto->_pNombre} ||<br/>";
                $mostrar .= "</tr>";
            }
        }
        echo $mostrar;
    }
    else{
        echo "No hay envios Para Mostrar.<br/>";
    }    
        break;
    case 7:
    $envios = Envio::TraerTodos();
    if(count($envios) > 0){
        $proveedor;
        $producto;
        $mostrar = "";
        foreach ($envios as $value) {
            $proveedor = Proveedor::Traer($value->_numero);
            $producto = Producto::Traer($value->_pNumero);
            if($producto != null && $proveedor != null){
                $auxMonto = ($value->_cantidad * $producto->_precio);
                $mostrar .= "<tr>";
                $mostrar .= "|| El Monto total del producto ($producto->_pNombre), del Proveedor ($proveedor->_nombre) es: {$auxMonto}||<br/>";
                $mostrar .= "</tr>";
            }
        }
        echo $mostrar;
    }
    else {
        echo "No hay Envios que Mostrar.<br/>";
    }    
        break;
    case 8:
    $envios = Envio::TraerTodos();
    if(count($envios) > 0){
        $proveedor = Proveedor::Traer(102);
        $producto = Producto::Traer(1);
        $mostrar = "";
        foreach ($envios as $value) {
            if($value->_numero == $proveedor->_numero && $value->_pNumero == $producto->_pNumero){
                $mostrar .= "<tr>";
                $mostrar .= "|| La cantidad Total de Producto de Tipo ($producto->_pNombre), del Proveedor ($proveedor->_nombre) es de : {$value->_cantidad} ||<br/>";
                $mostrar .= "</tr>";
                break;
            }
        }
        if($mostrar != ""){
            echo $mostrar;
        }
        else {
            echo "El Proveedor no a hecho envios de ese Producto.<br/>";
        }
    }
    else {
        echo "No hay Envios que Mostrar.<br/>";
    }    
        break;
    case 9:
    $proveedores = Proveedor::TraerTodos();
    $envios = Envio::TraerTodos();
    if (count($envios) > 0 && count($proveedores) > 0) {
        $mostrar = "";
        foreach ($proveedores as $value) {
            if(strcmp($value->_localidad,"Avellaneda")== 0){
                $mostrar .= "||Proveedor: {$value->_nombre} | Numero: {$value->_numero} | Localidad: {$value->_localidad}||<br/>-------------------------------------<br/>";
                foreach ($envios as $envio) {
                    if ($envio->_numero == $value->_numero) {
                        $mostrar .= "||Numero de Producto: {$envio->_pNumero}||<br/>-------------------------------------<br/>";
                    }
                }
            }
        }
        if($mostrar != ""){
            echo $mostrar;
        }
        else {
            echo "No hay Productos subministrados por Proveedores de Avellaneda.<br/>";
        }
    }
    else {
        echo "<br/>No hay Proveedores de 'Avellaneda' o No hay Productos que Mostrar.<br/>";
    }    
        break;
    case 10:
    $proveedores = Proveedor::TraerTodos();
    if (count($proveedores) > 0) {
        $mostrar = "";
        foreach ($proveedores as $value) {
            if(stripos($value->_nombre,"I") != 0){
                $mostrar.= "||Numero/Proveedor: {$value->_numero} | Domicilio/Proveedor: {$value->_domicilio} | Localidad/Proveedor: {$value->_localidad}||<br/>";
            }
        }
        if($mostrar != ""){
            echo $mostrar;
        }
        else {
            echo "No Hay Proveedores con la letra 'I' en sus nombres.";
        }
    }
    else {
        echo "No hay Proveedores a Mostrar.";
    }    
        break;    
    case 11:
        $nuevoProducto = new Producto(4,"Chocolate",25.35,"Chico");
        $conexion = BaseDatos::Conectar();
        if($conexion != null){
            $consulta = "INSERT INTO productos (pNumero,pNombre,Precio,Tamano) VALUES ($nuevoProducto->_pNumero,'$nuevoProducto->_pNombre',$nuevoProducto->_precio,'$nuevoProducto->_tamano')";

            $recurso = mysql_db_query("utn",$consulta,$conexion);
            if($recurso !== false){
                echo "Se Pudo Ingresar en la Base de Datos.";
            }
            else {
                echo "No se Pudo Ingresar en la base de datos el Producto.";
            }

            BaseDatos::Desconectar();
        }
        else {
            echo "Hubo un Error al conectar con la base de Datos.";
        }
        break;
    case 12:
        $nuevoProveedor = new Proveedor(null,$_REQUEST["nombre"],$_REQUEST["domicilio"],$_REQUEST["localidad"]);
        $conexion = BaseDatos::Conectar();
        if($conexion != null){
            $consulta = "INSERT INTO provedores (Nombre,Domicilio,Localidad) VALUES ('$nuevoProveedor->_nombre','$nuevoProveedor->_domicilio','$nuevoProveedor->_localidad')";
            
            $recurso = mysql_db_query("utn",$consulta,$conexion);
            if($recurso !== null){
                echo "Pudo Agregar Exitosamente a la Base de Datos.";
            }
            else {
                echo "No Pudo Agregar a la Base de Datos.";
            }

            BaseDatos::Desconectar();
        }
        else {
            echo "Hubo un Error al conectar con la base de Datos.";
        }
        break;
    case 13:
        $nuevoProveedor = new Proveedor(107,"Rosales","La Plata","Rosales");
        $conexion = BaseDatos::Conectar();
        if ($conexion != null) {
            $consulta = "INSERT INTO provedores (Nombre,Domicilio,Localidad,Numero) VALUES ('$nuevoProveedor->_nombre','$nuevoProveedor->_domicilio','$nuevoProveedor->_localidad',$nuevoProveedor->_numero)";

            $recurso = mysql_db_query("utn",$consulta,$conexion);
            if ($recurso !== false) {
                echo "Se Pudo Ingresar Exitosamente a la Base de Datos.";
            }
            else {
                echo "Hubo un Error al Intentar Ingresar a la Base de Datos.";
            }

            BaseDatos::Desconectar();
        }
        else {
            echo "Hubo un Error al conectar con la base de Datos.";
        }
        break;
    case 14:
        $conexion = BaseDatos::Conectar();
        if($conexion != null){
            $consulta = "UPDATE productos SET Precio=97.50 WHERE Tamano = 'Grande'";

            $recurso = mysql_db_query("utn",$consulta,$conexion);
            if ($recurso !== false) {
                echo "Se pudieron Modificar Todos Los Precios de Los Productos con Tamaño 'Grande'.";
            }
            else {
                echo "Hubo un Error al realizar la Consulta.";
            }

            BaseDatos::Desconectar();
        }
        else {
            echo "Hubo un Error al conectar con la base de Datos.";
        }
        break;
    case 15:
        $envios = Envio::TraerTodos();
        $productos = Producto::TraerTodos();
        $conexion = BaseDatos::Conectar();
        if ($conexion != null) {
            foreach ($envios as $envio) {
                foreach ($productos as $producto) {
                    if(strcmp($producto->_tamano,"Chico")== 0){
                        if($envio->_pNumero == $producto->_pNumero && $envio->_cantidad >= 300){
                            $consulta = "UPDATE productos SET Tamano='Mediano' WHERE pNumero= $producto->_pNumero";

                            $recurso = mysql_db_query("utn",$consulta,$conexion);
                            if($recurso !== false){
                                echo "Se Pudo realizar la consulta Correctamente.";
                            }
                            else {
                                echo "No Pudo realizarse la consulta.";
                            }
                        }
                    }
                }
            }

            BaseDatos::Desconectar();
        }
        else {
            echo "Hubo un Error al conectar con la base de Datos.";
        }
        break;
    case 16:
        $conexion = BaseDatos::Conectar();
        if ($conexion != null) {
            $consulta = "DELETE FROM productos WHERE pNumero= 1";

            $recurso = mysql_db_query("utn",$consulta,$conexion);
            if($recurso !== false){
                echo "Pudo Borrarse con Exito el Producto Numero = '1'.";
            }
            else {
                echo "Hubo un Error al Realizar la Consulta.";
            }
        }
        else {
            echo "Hubo un Error al conectar con la base de Datos.";
        }
        break;
    case 17:
        $envios = Envio::TraerTodos();
        $proveedores = Proveedor::TraerTodos();
        $conexion = BaseDatos::Conectar();
        if ($conexion != null) {
            $flag = true;
            $cont= 0;
            foreach ($proveedores as $proveedor) {
                foreach ($envios as $envio) {
                    if($proveedor->_numero == $envio->_numero){
                        $flag = false;
                        break;
                    }
                }
                if($flag){
                    $consulta = "DELETE FROM provedores WHERE Numero=$proveedor->_numero";

                    $recurso = mysql_db_query("utn",$consulta,$conexion);
                    if($recurso !== false){
                        echo "Pudo Borrarse con Exito a todos Los Proveedores sin Envios Realizados.";
                        $cont++;
                    }
                    else {
                        echo "Hubo Un problema al Realizar La consulta.";
                    }
                }
                elseif ($flag == false) {
                    $flag = true;
                }
            }
            if($cont == 0){
                echo "Todos Los Proveedores Tienen Envios Realizados.";
            }
        }
        else {
            echo "Hubo un Error al conectar con la base de Datos.";
        }
        break;
    default:
        echo "no llego a ninguna accion.";
        break;
}





?>