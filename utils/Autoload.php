<?php

 

    spl_autoload_register(function ($clase){
        if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/ApiPublicidad2.0/modelos/$clase.class.php"))
            require $_SERVER['DOCUMENT_ROOT'] . "/ApiPublicidad2.0/modelos/$clase.class.php";

        if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/ApiPublicidad2.0/controladores/$clase.class.php")){
            require $_SERVER['DOCUMENT_ROOT'] . "/ApiPublicidad2.0/controladores/$clase.class.php";
        }

    });