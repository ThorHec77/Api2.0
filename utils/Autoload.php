<?php

 

    spl_autoload_register(function ($clase){
        if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/ApiPublicidad/modelos/$clase.class.php"))
            require $_SERVER['DOCUMENT_ROOT'] . "/ApiPublicidad/modelos/$clase.class.php";

        if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/ApiPublicidad/controladores/$clase.class.php")){
            require $_SERVER['DOCUMENT_ROOT'] . "/ApiPublicidad/controladores/$clase.class.php";
        }

    });