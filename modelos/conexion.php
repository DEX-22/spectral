<?php

class Conexion
{
    
        

        public static function conectar(){

              


                $sqlConexion = new PDO("mysql:host=localhost;dbname=spectral","root","");
                $sqlConexion->exec("set names utf8");
                return $sqlConexion;

        }



}



