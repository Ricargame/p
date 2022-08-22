<?php
    include ("../Modelo/BaseDeDatos.php");
    $a = new bd();

    $Nombre = $_GET["Nombre"];
    if ($Nombre != ""){
         $a->ejecutar("INSERT INTO producto (Nombre) VALUES ('$Nombre')");
        header ("location:../producto.php?Mensaje=2");
    }else{
        header ("location:../producto.php?Mensaje=1");
    }
?>