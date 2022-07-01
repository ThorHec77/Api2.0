<?php

    require $_SERVER['DOCUMENT_ROOT'] ."/Api-master/Publicidad2.0/utilsP/autoload.php";
    
    $id = $_POST['id'];

    BannerControlador::EliminarPublicidad($id);
    echo '<script language="javascript">alert("La publicidad de elimino con exito"),window.location.href="/Api-master/Index.html"</script>';
    
    
    //unlink($_SERVER['DOCUMENT_ROOT']. "/Apipublicidad2.0/imagenes/".$nombre);
    //header('location:Index.html');

