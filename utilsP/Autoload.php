<?php

 

    spl_autoload_register(function ($clase){
        if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/Api-master/Publicidad2.0/modelosP/$clase.class.php"))
            require $_SERVER['DOCUMENT_ROOT'] . "/Api-master/Publicidad2.0/modelosP/$clase.class.php";

        if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/Api-master/Publicidad2.0/controladoresP/$clase.class.php")){
            require $_SERVER['DOCUMENT_ROOT'] . "/Api-master/Publicidad2.0/controladoresP/$clase.class.php";
        }

    });