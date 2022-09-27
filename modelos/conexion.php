<?php

//esta archivo se guarda en la carpeta modelo
    class Conexion{
        static public function conectar(){
            //orden de paramentros para la conexion de la base de datos en PDO
            // #PDO("nombre del servidor, nombre de la base de datos","usuario", "contraseña")

            $conexion = new PDO("mysql:host=localhost; dbname=vetco", "root","");//crea un objeto nuevo

            $conexion->exec("set names utf8");// ejecuta con este juego de caracteres especiales, esto se debe mirar en el servidor y en los archivos html para que 

            return $conexion;
        }
    }
?>