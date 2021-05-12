<?php

include "modelos/spotlight.modelo.php";
class ControladorSpotlight{

public static function ctrMostrarSpotlight(){

$tabla = 'informacion';
$spotlight = ModeloSpotlight::mdlMostrarSpotlight($tabla);
return $spotlight;         

}

}


?>