<?php

class Conexion{
    /**
     * Conexión a la base de datos
     * @return conexion
     */
    private $con;

    public static function conectar(){
        try {
            $con = new PDO("mysql:host=localhost;dbname=login_pdo","root","");
            //echo "OKEY, conexión lograda";
            return $con;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

}

// Conexion::conectar();

