<?php

include 'modelo/OadUsuario.php';

class UsuarioControlador{
    public static function login($nickname,$pwd){
        $objUsuario = new Usuario;
        $objUsuario->setNickname($nickname);
        $objUsuario->setPwd($pwd);

        return OadUsuario::login($objUsuario);
    }

}


?>