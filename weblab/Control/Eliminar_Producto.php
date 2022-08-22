<?php
    include ("../Modelo/BaseDeDatos.php");
    $a = new bd();
    $a->ejecutar("DELETE FROM producto WHERE ID = $_GET[ID]");
    header("location:../producto.php?Mensaje=3");
?>