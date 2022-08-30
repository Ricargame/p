<?php
    include ("../Modelo/BaseDeDatos.php");
    $a = new bd();
    $Nombre=$_GET["Nombre"];
    if ($Nombre != ""){
         $a->ejecutar("INSERT INTO marca (Nombre) VALUES ('$Nombre')");
        header ("location:../marca.php?Mensaje=2");
    }else{
        header ("location:../marca.php?Mensaje=1");
    }
?>