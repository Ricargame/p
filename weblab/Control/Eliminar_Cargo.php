<?php
    include ("../Modelo/BaseDeDatos.php");
    $a = new bd();
    $a->ejecutar("DELETE FROM cargo WHERE ID = $_GET[ID]");
    header ("location:../cargo.php?Mensaje=3");
?>