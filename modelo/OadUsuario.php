<?php

include 'Conexion.php';
include "entidades/Usuario.php";

class OadUsuario extends Usuario{
    
    protected static $conex;
    
    private static function getConexion(){
        self::$conex = Conexion::conectar();
    }
    
    private static function desconectar(){
        self::$conex = null;
    }

    public static function login($usuario){
        $query = "SELECT * FROM usuario 
        WHERE nickname = :nickname AND pwd = :pwd";

        self::getConexion();

        $resultado = self::$conex->prepare($query);
        $usr = $usuario->getNickname();
        $pwd = $usuario->getPwd();
        $resultado->bindParam(":nickname",$usr);

        $resultado->bindParam(":pwd",$pwd);
        $resultado->execute();

        if($resultado->rowCount() == 1){
            return "Usuario encontrado";
        } 
        return "nombre o contraseña incorrecta";

    }
}