<?php
    include ("../Modelo/BaseDeDatos.php");
    $a = new bd();
    $a->ejecutar("DELETE FROM color WHERE ID = $_GET[ID]");
    header ("location:../color.php?Mensaje=3");
?>