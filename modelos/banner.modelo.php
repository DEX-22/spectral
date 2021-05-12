<?php

class ModeloBanner{
    public static function mdlMostrarBanner($tabla){

            $stmt = Conexion::conectar()->prepare("SELECT img FROM $tabla");
            $stmt->execute();
            return $stmt ->fetchAll();
            $stmt -> close();
            $stmt = null;


    }
}

?>