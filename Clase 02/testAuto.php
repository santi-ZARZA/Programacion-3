<?php

// Ejercicio 21 Implementado

// Mismas marcas y distintos colores
$auto1 = new Auto("Toyota","rojo");
$auto2 = new Auto("Toyota","azul");
// Mismas marcas,colores pero distintos precios
$auto3 = new Auto("Fiat","verde",1000);
$auto4 = new Auto("Fiat","verde",1100);
// Sobrecarga Restante
$auto5 = new Auto("Citroen","Blanco",500,date('d/m/y'));


//Utilizo metodo AgregarImpuestos()
$auto3->AgregarImpuestos(1500);
$auto4->AgregarImpuestos(1500);
$auto5->AgregarImpuestos(1500);

// Sumando dos autos
echo "El total es: ".Auto::Add($auto1,$auto2);

///////////////////////////////////
echo "<br>"."-----------------------------------------------------------";
///////////////////////////////////

// Comparo Autos
echo "<br>"."auto1 es igual a auto2, Respuesta: ".$auto1->Equals($auto2);
echo "<br>"."auto1 es igual a auto5, Respuesta: ".$auto1->Equals($auto5);

///////////////////////////////////
echo "<br>"."-----------------------------------------------------------";
///////////////////////////////////

// Muestro los autos Impares
Auto::MostrarAuto($auto1);
Auto::MostrarAuto($auto3);
Auto::MostrarAuto($auto5);

?>