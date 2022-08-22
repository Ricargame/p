<?php
    include ("../Modelo/BaseDeDatos.php");
    $a = new bd();
    $Nombre = $_GET["Nombre"];
    if ($Nombre != ""){
         $a->ejecutar("INSERT INTO color (Nombre) VALUES ('$Nombre')");
        header ("location:../color.php?Mensaje=2");
    }else{
        header ("location:../color.php?Mensaje=1");
    }
?>