<?php
require $_SERVER['DOCUMENT_ROOT'] ."/ApiPublicidad/utils/autoload.php";

class BannerModelo extends Modelo{
    public $Nombre;
    public $Imagen;
    public $Url;
    
    
    
    
    public function InsertarPublicidad(){

        $query = "INSERT INTO Banner(nombre,imagen,url) VALUES('" . $this->Nombre . "','" . $this->Imagen . "' ,'"  . $this->Url . "')";
        $this -> conexion -> query($query);
       
    }  
}