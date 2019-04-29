/// <reference path="Ajax.ts" />

//import { Ajax } from "./Ajax";


namespace Funciones{

    export function MostrarProductos() {
        var objeto : Ajax = new Ajax();

        objeto.Get("accion=1",Funciono,Error);
    }

    export function ProveedoresQuilmes() {
        var objeto : Ajax = new Ajax();

        objeto.Get("accion=2",Funciono,Error);
    }

    export function EnviosEntre200y300() {
        var objeto : Ajax = new Ajax();

        objeto.Get("accion=3",Funciono,Error); 
    }

    export function ProductosEnviados() {
        var objeto : Ajax = new Ajax();

        objeto.Get("accion=4",Funciono,Error);
    }

    export function Primeros3Productos() {
        var objeto : Ajax = new Ajax();

        objeto.Get("accion=5",Funciono,Error);
    }

    export function ProveedoresyProductosEnviados() {
        var objeto : Ajax = new Ajax();

        objeto.Get("accion=6",Funciono,Error);
    }

    export function MontoTotalEnvios() {
        var objeto : Ajax = new Ajax();

        objeto.Get("accion=7",Funciono,Error);
    }

    export function MontoDeProducto1PorProveedor102() {
        var objeto : Ajax = new Ajax();

        objeto.Get("accion=8",Funciono,Error);
    }

    export function ProductosPorProveedoresdeAvellaneda() {
        var objeto : Ajax = new Ajax();

        objeto.Get("accion=9",Funciono,Error);
    }

    export function DatosDeProveedoresConLetraI() {
        var objeto : Ajax = new Ajax();

        objeto.Get("accion=10",Funciono,Error);
    }

    export function AgregarProductoChocolate(){
        var objeto : Ajax = new Ajax();

        objeto.Get("accion=11",Funciono,Error);
    }

    export function InsertarNuevoProveedor() {
        (<HTMLInputElement>document.getElementById("nombre")).disabled=false;
        (<HTMLInputElement>document.getElementById("domicilio")).disabled=false;
        (<HTMLInputElement>document.getElementById("localidad")).disabled=false;
        (<HTMLInputElement>document.getElementById("agregar")).disabled=false;
    }

    export function InsertarNuevoProveedor107() {
        var objeto : Ajax = new Ajax();

        objeto.Get("accion=13",Funciono,Error);
    }

    export function CambiarPrecios() {
        var objeto : Ajax = new Ajax();

        objeto.Get("accion=14",Funciono,Error);
    }

    export function CambiarTamaño() {
        var objeto : Ajax = new Ajax();

        objeto.Get("accion=15",Funciono,Error);
    }

    export function EliminarElPrimerProducto() {
        var objeto : Ajax = new Ajax();

        objeto.Get("accion=16",Funciono,Error);
    }

    export function EliminarProveedoresSinEnvios() {
        var objeto : Ajax = new Ajax();

        objeto.Get("accion=17",Funciono,Error);
    }

    export function CargarProveedor() {
        var nombre : string = (<HTMLInputElement>document.getElementById("nombre")).value;
        var domicilio : string = (<HTMLInputElement>document.getElementById("domicilio")).value;
        var localidad : string = (<HTMLInputElement>document.getElementById("localidad")).value;
        
        var accion : string = 'accion=12'+'&nombre='+nombre+'&domicilio='+domicilio+'&localidad='+localidad;

        var objeto : Ajax = new Ajax();

        objeto.Get(accion,Funciono,Error);

        (<HTMLInputElement>document.getElementById("nombre")).disabled=true;
        (<HTMLInputElement>document.getElementById("domicilio")).disabled=true;
        (<HTMLInputElement>document.getElementById("localidad")).disabled=true;
        (<HTMLInputElement>document.getElementById("agregar")).disabled=true;
    }

    function Funciono(respuesta:string) {
        (<HTMLTableElement>document.getElementById("muestra")).innerHTML = respuesta;
    }

    function Error() {
        alert("A ocurrido un error.");
    }
}