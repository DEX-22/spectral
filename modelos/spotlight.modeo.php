<?php

class ModeloSpotlight{
    public static function mdlMostrarSpotlight($tabla){

        stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        stmt -> execute();
        return stmt->fetchAll();
        stmt->close();
        stmt = null;


    }
}

?>