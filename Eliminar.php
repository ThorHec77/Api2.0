<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/ApiPublicidad2.0/utils/autoload.php";
    
    $id = $_POST['id'];

    BannerControlador::EliminarPublicidad($id);
    echo '<script language="javascript">alert("La publicidad de elimino con exito"),window.location.href="Index.html"</script>';
    
    
    //unlink($_SERVER['DOCUMENT_ROOT']. "/Apipublicidad2.0/imagenes/".$nombre);
    //header('location:Index.html');

