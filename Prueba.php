<?php
require $_SERVER['DOCUMENT_ROOT'] ."/ApiPublicidad/utils/autoload.php";


$nombre = $_POST['nombre'];
//$imagen = addslashes[file_get_contents($_FILES['imagen']['tmp_name'])];
$nombreImagen = $_FILES['imagen']['name'];
$tipoImagen = $_FILES['imagen']['type'];
$tamanioImagen = $_FILES['imagen']['size'];
$url = $_POST['url'];

if ($tamanioImagen <= 1500000) {
    if ($tipoImagen == "image/jpeg" || $tipoImagen == "image/jpg" || $tipoImagen == "image/png") {
        $carpetaDestino = $_SERVER['DOCUMENT_ROOT'] . "/ApiPublicidad/imagenes/";
        move_uploaded_file($_FILES['imagen']['tmp_name'], $carpetaDestino.$nombreImagen);
    }else{
        echo "solo imagenes con extencion jpg, jpeg, png...";
    }
}else{
    echo "Maximo 1,5 MB";
}



BannerControlador::InsertarPublicidad($nombre, $nombreImagen, $url);
