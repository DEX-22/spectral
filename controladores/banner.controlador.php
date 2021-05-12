<?php

            include "modelos/banner.modelo.php";
class ControladorBanner{

        public static function ctrMostrarBanner(){
            
            $tabla = 'banner';
            $banner = ModeloBanner::mdlMostrarBanner($tabla);
            return $banner;         

        }

}


?>