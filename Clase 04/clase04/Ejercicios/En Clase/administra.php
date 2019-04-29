<?php
    require_once "./Empleado.php";

    $ruta = $_FILES["foto"]["name"];
    $destino = "fotosempleados/".$_POST["legajo"]."_".$_POST["apellido"].".".pathinfo($ruta,PATHINFO_EXTENSION);
    $empleaux = new Empleado($_POST["nombre"],$_POST["apellido"],$_POST["cmbsexo"],$_POST["legajo"],$_POST["sueldo"],$destino);

    Empleado::Agregar($empleaux);

    //$destino = "fotosempleados/".$_POST["legajo"]."_".$_POST["apellido"].".".pathinfo($ruta,PATHINFO_EXTENSION);
    /*echo*/ move_uploaded_file($_FILES["foto"]["tmp_name"],$destino);
    //echo $_FILES["foto"]["tmp_name"]."<br>";
    //echo $destino;



    //var_dump(Empleado::TraerTodos());

    foreach (Empleado::TraerTodos() as $value) {
        echo "<br>";
        echo "Nombre: ".$value->nombre."<br>";
        echo "Apellido: ".$value->apellido."<br>";
        echo "Sexo: ".$value->sexo."<br>";
        echo "Legajo: ".$value->legajo."<br>";
        echo "Sueldo: ".$value->sueldo."<br>";
        echo "Ubicacion Foto: ".$value->path_info."<br>";
        echo '<img src="'.$value->path_info.'"/><br>';
    }
?>