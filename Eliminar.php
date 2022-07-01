<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/ApiPublicidad2.0/utils/autoload.php";
    
    $id = $_POST['Id'];
    
    BannerControlador::EliminarPublicidad($id);
    header("Index.html")


