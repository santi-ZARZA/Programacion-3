<?php

$autoN1 = new Auto("toyota", "verde", 1250, date("d/m/y"));
$autoN2 = new Auto("Ferrari", "rojo", 250, date("d/m/y"));
$autoN3 = new Auto("Renault", "azul", 2250, date("d/m/y"));
$autoN4 = new Auto("Priuss", "negro", 6250, date("d/m/y"));
$autoN5 = new Auto("Citroen", "Amarillo", 4250, date("d/m/y"));
$autoN6 = new Auto("toyota", "verde", 1250, date("d/m/y"));


$garage = new Garage("Monotributo", 250);


$garage->Add($autoN1);
$garage->Add($autoN2);
$garage->Add($autoN3);
$garage->Add($autoN4);
$garage->Add($autoN5);
$garage->Add($autoN6);
//$garage->Add($autoN5);

echo "<br>--------------------------------------------------------------------<br>";

echo "<br>Respuestas: '1' = 'si' | ' ' = 'no'<br>";
echo "<br>El auto n° 2 esta en la cochera? ",$garage->Equals($autoN2);
echo "<br>El auto n° 3 esta en la cochera? ",$garage->Equals($autoN3);
echo "<br>El auto n° 1 esta en la cochera? ",$garage->Equals($autoN1);
echo "<br>El auto n° 4 esta en la cochera? ",$garage->Equals($autoN4);
echo "<br>El auto n° 5 esta en la cochera? ",$garage->Equals($autoN5);

echo "<br>--------------------------------------------------------------------<br>";

$garage->MostrarGarage();

echo "<br>--------------------------------------------------------------------<br>";

$garage->Remove($autoN1);
$garage->Remove($autoN1);
$garage->Remove($autoN5);

echo "<br>--------------------------------------------------------------------<br>";

echo "<br>Respuestas: '1' = 'si' | ' ' = 'no'<br>";
echo "<br>El auto n° 2 esta en la cochera? ",$garage->Equals($autoN2);
echo "<br>El auto n° 3 esta en la cochera? ",$garage->Equals($autoN3);
echo "<br>El auto n° 1 esta en la cochera? ",$garage->Equals($autoN1);
echo "<br>El auto n° 4 esta en la cochera? ",$garage->Equals($autoN4);
echo "<br>El auto n° 5 esta en la cochera? ",$garage->Equals($autoN5);

echo "<br>--------------------------------------------------------------------<br>";

$garage->MostrarGarage();

echo "<br>--------------------------------------------------------------------<br>";


?>