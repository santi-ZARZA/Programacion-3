<?php
    require_once "./clase/Enigma.php";

    Enigma::Encriptar($_REQUEST["mensaje"],"../misArchivos/encriptado.txt");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 28</title>
</head>
<body>
    <table align="center" border="2">
        <tr>
            <th>Ingrese la opcion deseada:</th>
            <td colspan="2">
                <a href="index.html">Ingresar otra oracion</a>
            </td>
            <td>
                <a href="Lee.php">Leer lo Encriptado</a>
            </td>
        </tr>
    </table>
</body>
</html>