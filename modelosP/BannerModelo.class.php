<?php
require $_SERVER['DOCUMENT_ROOT'] ."/Api-master/Publicidad2.0/utilsP/autoload.php";

class BannerModelo extends Modelo{
    public $Id;
    public $Nombre;
    public $Imagen;
    public $Url;
    
    public function InsertarPublicidad(){

        $query = "INSERT INTO Banner2(nombre,imagen,url) 
            VALUES('" . $this -> Nombre . "','" . $this -> Imagen . "' ,'"  . $this -> Url . "')";
        $this -> conexion -> query($query);
       
    } 
    public function EliminarPublicidad(){

        $query = "DELETE FROM Banner2 WHERE nombre ='" . $this -> Id . "'" ;
        $this-> conexion-> query($query);

    }
    public function ObtenerPublicidad(){
        $query="SELECT * FROM Banner2";
        $filas = $this -> conexion -> query($query) -> fetch_all(MYSQLI_ASSOC);

        $elementos = [];
            foreach($filas as $fila){
                $u = new BannerControlador();
                $u -> Id = $fila['id'];
                $u -> Nombre = $fila['nombre'];
                $u -> Imagen = $fila['imagen'];
                $u -> Url = $fila['url'];
                array_push($elementos, $u);
            }
            
       // echo('<pre>');
        //var_dump($elementos);
        //echo('</pre>');
          return  var_dump($elementos);  
    }

    public function ObtenerImagen(){
        $query="SELECT * FROM Banner2";
        $filas = $this -> conexion -> query($query) -> fetch_all(MYSQLI_ASSOC);

        $elementos = [];
            foreach($filas as $fila){
                $u = new BannerControlador();
                $u -> Imagen = $fila['imagen'];
                array_push($elementos, $u);
            }
            return var_dump($elementos);
        
    }
}