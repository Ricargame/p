<?php
    include ("../Modelo/BaseDeDatos.php");
    $a = new bd();

    $Nombre = $_GET["Nombre"];
    if ($Nombre != ""){
        $a->ejecutar("INSERT INTO cargo (Nombre) VALUES ('$Nombre')");
        header ("location:../cargo.php?Mensaje=2");
    }else{
        header ("location:../cargo.php?Mensaje=1");
    }
    
?>