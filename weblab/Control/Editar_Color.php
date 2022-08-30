<?php
    include ("../Modelo/BaseDeDatos.php");
    $a = new bd();
    $a->ejecutar("UPDATE color SET Nombre='$_GET[edit]' WHERE ID = $_GET[id]");
?>