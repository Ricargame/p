<?php

    include ("../Modelo/BaseDeDatos.php");
    $a = new bd();

    $Nombre = $_GET["Nombre"];
    $Apellido = $_GET["Apellido"];
    $Nacionalidad =$_GET["Nacionalidad"];
    $Cedula = $_GET["Cedula"];
    $Telefono = $_GET["Telefono"];
    $Correo = $_GET["Correo"];
    $Direccion = $_GET["Direccion"];
    $Cargo = $_GET["Cargo"];
    $a->ejecutar("INSERT INTO 
    personal(Nombre,Apellido,Nacionalidad,Cedula,Telefono,Correo,Direccion,Cargo) 
    Values('$Nombre','$Apellido','$Nacionalidad','$Cedula','$Telefono','$Correo','$Direccion','$Cargo')");
    header ("location:../personal.php?Mensaje=2");
?>