<?php
    include ("../Modelo/BaseDeDatos.php");
    $a = new bd();
    $a->ejecutar("DELETE FROM personal WHERE ID = $_GET[ID]");
    header ("location:../personal.php?Mensaje=3");
?>