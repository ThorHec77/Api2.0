<?php
require $_SERVER['DOCUMENT_ROOT'] ."/ApiPublicidad/utils/autoload.php";


//$nombre = $_POST['nombre'];
if (isset($_REQUEST['Aceptar'])) {
    if (isset($_FILES['imagen']['name'])) {
        $tipoArchivo = $_FILES['imagen']['type'];
        $nombreArchivo = $_FILES['imagen']['name'];
        $tamanoArchivo = $_FILES['imagen']['size'];
        $imagenSubida = fopen($_FILES['imagen']['tmp_name'], 'r');
        $binariosImagen = fread($imagenSubida, $tamanoArchivo);
    }
}
//$url = $_POST['url'];



BannerControlador::InsertarPublicidad($tipoArchivo , $nombreArchivo , $binariosImagen);
