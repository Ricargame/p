<?php
    include ("../Modelo/BaseDeDatos.php");
    $a = new bd();
    $a->ejecutar("DELETE FROM modelo WHERE ID = $_GET[ID]");
    header ("location:../modelo.php?Mensaje=3");
?>