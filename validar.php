<?php  
include 'controlador/UsuarioControlador.php';
// echo UsuarioControlador::login("juanito","1234");

if(isset($_POST['nickname']) && isset($_POST['pwd'])){
    $nick = $_POST['nickname'];
    $pwd = $_POST['pwd'];

    echo UsuarioControlador::login($nick,$pwd);
}
?>