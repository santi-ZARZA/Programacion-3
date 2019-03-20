<?php
//  Ejercicio Guia 1 
/*
    $nombre = "santiago, ";
    $apellido = "zarza";
    $tal = "<br> Hola \"mundo\"";

    echo $nombre.$apellido." Dice: ";
    echo $tal;
*/

// Ejercicio Guia 2
/*
$x = -3;
$y = 15;
echo $x + $y;
*/

// Ejercicio Guia 3
/*
$x = -3;
$y = 15;
$z = $x + $y;
echo $x."<br/>".$y."<br/>".$z;
*/

// Ejercicio Guia 4
/*
$cont = 0;
$numeros = 0;
$i = 1;
while($numeros <= 1000)
{
    echo "<br/>".$numeros;
    $numeros = $numeros + $i;
    $cont++;
    $i++;
}
echo "<br/>"."La cantidad de numeros sumados fue: ".$cont;
*/

// Ejercicio Guia 5
/*
$a = rand(0,10);
$b = rand(0,10);
$c = rand(0,10);
$valorMedio = "No Hay Valor Medio";

if (($a<$b && $b<$c) || ($c<$b && $b<$a)) {
    $valorMedio = $b;
}
elseif (($b<$a && $a<$c) || ($c<$a && $a<$b)) {
    $valorMedio = $a;
}
else if(($a<$c && $c<$b) || ($b<$c && $c<$a))
{
    $valorMedio = $c;
}

echo "<br/>"."El Valor de 'a' es: ".$a;
echo "<br/>"."El Valor de 'b' es: ".$b;
echo "<br/>"."El Valor de 'c' es: ".$c;

echo "<br/>"."El Resultado es: ".$valorMedio;
*/

// Ejercicio Guia 7
/*
echo date("d D F");
$estacion = date("n");

switch ($estacion) {
    case "1":
        echo "<br/>"."Verano";
        break;
    case "2":
        echo "<br/>"."Verano";
        break;
    case "3":
        echo "<br/>"."Verano";
        break;
    case "4":
        echo "<br/>"."Primavera";    
        break;
    case "5":
        echo "<br/>"."Primavera";
        break;
    case "6":
        echo "<br/>"."Primavera";
        break;
    case "7":
        echo "<br/>"."Otoño";
        break;
    case "8":
        echo "<br/>"."Otoño";
        break;
    case "9":
        echo "<br/>"."Otoño";
        break;
    case "10":
        echo "<br/>"."Invierno";
        break;
    case "11":
        echo "<br/>"."Invierno";
        break;
    case "12":
        echo "<br/>"."Invierno";
        break;
    
    default:
        
        break;
}
*/

// Ejercicio Guia 9 - Arrays
/*
$array;
$sumaTotal = 0;
for ($i=0; $i < 4; $i++) { 
    $array[$i] = rand();
    $sumaTotal += $array[$i];
}

if(($sumaTotal/5) > 6){
    echo "Promedio Mayor que 6.";
    echo "<br/>".($sumaTotal/5);
}
else if(($sumaTotal/5) == 6){
    echo "Promedio Igual que 6.";
    echo "<br/>".($sumaTotal/5);
}
else{
    echo "Promedio menor que 6.";
    echo "<br/>".($sumaTotal/5);
}
*/

// Ejercicio Guia 10 - Arrays
/*
$numero;
$arrayNumerosImpares;
$i = 0;
while ($i < 10) {
    $numero = rand(0,10);
    if($numero % 2 == 1)
    {
        $arrayNumerosImpares[$i] = $numero;
        $i++;
    }
}
echo "Los Imprimo con for()";
for ($x=0; $x < count($arrayNumerosImpares); $x++) { 
    echo "<br/>".$arrayNumerosImpares[$x];
}
echo "<br/>"."Los Imprimo con un While()";
$a = 0;
while ($a < count($arrayNumerosImpares)) {
    echo "<br/>".$arrayNumerosImpares[$a];
    $a++;
}
echo "<br/>"."Los Imprimo con un Foreach()";
foreach($arrayNumerosImpares as $value){
    echo "<br/>".$value;
}
*/

// Ejercicio Guia 11 
/*
$v[1]=90; $v[30]=7; $v['e']=99; $v['hola']= 'mundo';

foreach ($v as $key => $value) {
    echo "<br/>"."$key ---> $value";
}
*/

// Ejercicio Guia 12
/*
$lapiceras = array();
$lapicera_1 = array("color" => "Azul", "marca" => "Parker", "trazo" => "fino", "precio" => 20.50);
$lapicera_2 = array("color" => "Negra", "marca" => "Bic", "trazo" => "medio", "precio" => 8.00);
$lapicera_3 = array("color" => "Roja", "marca" => "Filgo", "trazo" => "Grueso", "precio" => 4.23);

array_push($lapiceras,$lapicera_1,$lapicera_2,$lapicera_3);

foreach ($lapiceras as $key => $lapicera) {
    echo "<br/>"."Lapicera: "."Color: ".$lapicera["color"]." | Marca: ".$lapicera["marca"]." | Trazo: ".$lapicera["trazo"]." | Precio: ".$lapicera["precio"];
}
*/

// Ejercicio Guia 13
/*
$animales = array();
$anios = array();
$lenguajesProgram = array();

array_push($animales,"Perro", "Gato", "Ratón", "Araña", "Mosca");
array_push($anios,"1986", "1996", "2015", "78", "86" );
array_push($lenguajesProgram,"php", "mysql", "html5", "typescript", "ajax" );

$arraysjuntos = array_merge($animales,$anios,$lenguajesProgram);

foreach ($arraysjuntos as $value) {
    echo $value."<br/>";
}
*/

// Ejercicio Guia 14
/*
$animales = array();
$anios = array();
$lenguajesProgram = array();

array_push($animales,"Perro", "Gato", "Ratón", "Araña", "Mosca");
array_push($anios,"1986", "1996", "2015", "78", "86" );
array_push($lenguajesProgram,"php", "mysql", "html5", "typescript", "ajax" );

//-----------------------------------------------------

$arrayasosiativo = array();
$arrayasosiativo["animales"] = $animales;
$arrayasosiativo["anios"] = $anios;
$arrayasosiativo["lenguajes"] = $lenguajesProgram;

echo "Mostrando el Array Asosiativo: <br/>";
foreach ($arrayasosiativo as $value ) {
    foreach ($value as $subvalue) {
        echo "---".$subvalue;
    }
    echo "<br/>";
}

//-----------------------------------------------------

$arrayIndexador = array();
array_push($arrayIndexador,$animales,$anios,$lenguajesProgram);

echo "<br/>"."Mostrando el Array Asosiativo: <br/>";
foreach ($arrayIndexador as $value) {
    foreach ($value as $subvalue) {
        echo "---".$subvalue;
    }
    echo "<br/>";
}

*/

?>