<?php

class Conexion
{
    
        public $nombreBD = "spectral";
        public $server = "localhost";
        public $usuario ="root";
        public $password = "";


        public static conectar(){

              


                $sqlConexion = new PDO("mysql:host=$server;dbname=$nombreBD",$usuario,$password);
                $sqlConexion->exec("set names utf8");
                return $sqlConexion;

        }



}



