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
    $Empresa = $_GET["Empresa"];

    if ($Nombre != "" || $Apellido != "" || $Nacionalidad != "" || $Cedula !="" || $Telefono != "" || $Correo != "" || $Direccion != ""){
        $a->ejecutar(
        "INSERT INTO personal (Nombre,Apellido,Nacionalidad,Cedula,Telefono,Direccion,Correo,Cargo) 
        VALUES ('$Nombre','$Apellido','$Nacionalidad',$Cedula,$Telefono,'$Direccion','$Correo','Algo')");
        header ("location:../personal.php?Mensaje=2");
    }else{
        header ("location:../personal.php?Mensaje=1");
    }
    


?>