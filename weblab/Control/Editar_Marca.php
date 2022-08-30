<?php
    include ("../Modelo/BaseDeDatos.php");
    $a = new bd();
    $a->ejecutar("UPDATE marca SET Nombre='$_GET[edit]' WHERE ID = $_GET[id]");
?>