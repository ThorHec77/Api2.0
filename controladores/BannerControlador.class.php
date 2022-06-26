<?php

require $_SERVER['DOCUMENT_ROOT'] ."/ApiPublicidad/utils/autoload.php";

class BannerControlador{
    public static function InsertarPublicidad($tipoArchivo, $nombreArchivo, $binariosImagen){
        $p = new BannerModelo();
        $p -> Nombre = $nombreArchivo;
        $p -> Imagen = $binariosImagen;
        $p -> Url = $tipoArchivo;
        $p -> InsertarPublicidad();
    }
}