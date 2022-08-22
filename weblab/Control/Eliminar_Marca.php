<?php
    include ("../Modelo/BaseDeDatos.php");
    $a = new bd();
    $a->ejecutar("DELETE FROM marca WHERE ID = $_GET[ID]");
    header ("location:../marca.php?Mensaje=3");
?>