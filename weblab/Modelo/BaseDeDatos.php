<?php

class bd{
    private $conexion;
    function conecta(){
        $this->conexion=mysqli_connect("localhost","id16122120_root","Fenomeno1970.","id16122120_sistema_proyecto");
            if (mysqli_connect_error()) die("No se conecta: ". mysqli_connect_error());
    }
    
    function inicio_trans() {mysqli_autocommit($this->conexion, false);}
   
    function grabar_trans(){ mysqli_commit($this->conexion);}
    
    function borrar_trans() {mysqli_rollback($this->conexion);}
    
    function ejecutar($sql) {
        $this->conecta();
        return mysqli_query($this->conexion, $sql); //se ejecuta
      }
    
     function query($sql) { return mysqli_query($this->conexion, $sql);}
    
    
    }
?>