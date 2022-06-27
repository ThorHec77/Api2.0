<?php

require $_SERVER['DOCUMENT_ROOT'] ."/ApiPublicidad/utils/autoload.php";

class BannerControlador{
    public static function InsertarPublicidad($nombre, $imagen, $url){
        $p = new BannerModelo();
        $p -> Nombre = $nombre;
        $p -> Imagen = $imagen;
        $p -> Url = $url;
        $p -> InsertarPublicidad();
    }
}