<?php
    include ("../Modelo/BaseDeDatos.php");
    $a = new bd();

    $Nombre = $_GET["Nombre"];
    
    if ($Nombre != ""){
         $a->ejecutar("INSERT INTO modelo (Nombre) VALUES ('$Nombre')");
        header ("location:../modelo.php?Mensaje=2");
    }else{
        header ("location:../modelo.php?Mensaje=1");
    }
?>